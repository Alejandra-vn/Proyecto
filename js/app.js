// Variables
const carrito = document.querySelector('#carrito');
const listaProductos = document.querySelector('#lista-productos');
const contenedorCarrito = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.querySelector('#vaciar-carrito'); 
const mensaje = document.querySelector('#mensaje'); // Contenedor del mensaje
let articulosCarrito = [];

const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

// Listeners
cargarEventListeners();

function cargarEventListeners() {
    listaProductos.addEventListener('click', agregarProducto);
    carrito.addEventListener('click', eliminarProducto);
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
    carrito.addEventListener('input', actualizarCantidad);
}

// Lee los datos del producto
function leerDatosProducto(producto, cantidad) {
    const infoProducto = {
        imagen: producto.querySelector('img').src,
        titulo: producto.querySelector('h4').textContent,
        precio: parseFloat(producto.querySelector('.precio span').textContent.replace('$', '')),
        id: producto.querySelector('a').getAttribute('data-id'),
        cantidad: cantidad // Usar la cantidad seleccionada
    };

    // Verificar si el producto ya está en el carrito
    if (articulosCarrito.some(producto => producto.id === infoProducto.id)) {
        articulosCarrito = articulosCarrito.map(producto => {
            if (producto.id === infoProducto.id) {
                producto.cantidad += infoProducto.cantidad; // Sumar cantidad si ya existe en el carrito
            }
            return producto;
        });
    } else {
        articulosCarrito = [...articulosCarrito, infoProducto]; // Agregar el nuevo producto
    }

    carritoHTML();
    mostrarMensaje("Producto agregado correctamente al carrito"); // Mostrar mensaje
}

// Elimina el producto del carrito
function eliminarProducto(e) {
    e.preventDefault();
    if (e.target.classList.contains('borrar-producto')) {
        const productoId = e.target.getAttribute('data-id');
        articulosCarrito = articulosCarrito.filter(producto => producto.id !== productoId);
        carritoHTML();
    }
}

// Actualiza la cantidad al cambiar el valor del input
function actualizarCantidad(e) {
    if (e.target.classList.contains('cantidad-producto')) {
        const id = e.target.getAttribute('data-id');
        const nuevaCantidad = parseInt(e.target.value, 10);

        if (nuevaCantidad > 0) {
            articulosCarrito = articulosCarrito.map(producto => {
                if (producto.id === id) {
                    producto.cantidad = nuevaCantidad;
                }
                return producto;
            });
            carritoHTML();
        }
    }
}

// Muestra el carrito en el HTML
function carritoHTML() {
    vaciarCarrito();

    articulosCarrito.forEach(producto => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><img src="${producto.imagen}" width="100"></td>
            <td>${producto.titulo}</td>
            <td>$${producto.precio.toFixed(2)}</td>
            <td>
                <input type="number" class="cantidad-producto" min="1" value="${producto.cantidad}" data-id="${producto.id}" style="width: 50px;">
            </td>
            <td><a href="#" class="borrar-producto" data-id="${producto.id}">X</a></td>
        `;
        contenedorCarrito.appendChild(row);
    });

    mostrarTotal();
}

// Muestra el total a pagar
function mostrarTotal() {
    const total = articulosCarrito.reduce((acc, producto) => acc + producto.precio * producto.cantidad, 0);
    const row = document.createElement('tr');
    row.innerHTML = `
        <td colspan="3" style="text-align: right; font-weight: bold;">Total a Pagar:</td>
        <td colspan="2" style="text-align: left;">$${total.toFixed(2)}</td>
    `;
    contenedorCarrito.appendChild(row);
}

// Vacía el carrito
function vaciarCarrito() {
    while (contenedorCarrito.firstChild) {
        contenedorCarrito.removeChild(contenedorCarrito.firstChild);
    }
}

// Muestra el mensaje de confirmación
function mostrarMensaje() {
    const mensaje = document.querySelector('#mensaje-confirmacion');
    mensaje.classList.add('show');
    
    // Ocultar el mensaje después de 3 segundos
    setTimeout(() => {
        mensaje.classList.remove('show');
    }, 3000);
}

// Función que añade el producto al carrito
function agregarProducto(e) {
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')) {
        const producto = e.target.parentElement.parentElement;
        const cantidad = parseInt(producto.querySelector('.cantidad').value, 10); // Obtener la cantidad seleccionada
        leerDatosProducto(producto, cantidad);
        
        // Llamar a la función para mostrar el mensaje
        mostrarMensaje();
    }
}
