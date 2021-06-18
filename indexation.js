const buscar =()=> {
    let busqueda = document.getElementById("busqueda").value
    let main = document.getElementById("resultado")
    if (document.getElementById(busqueda)) {
        var resultado = document.getElementById(busqueda).cloneNode(true)
        document.getElementById("juegos").style.display = "none"
    }
    else {
        alert("No se encontraron coincidencias con su búsqueda")
        return
    }
    let cabecera = document.createElement("h2")
    cabecera.setAttribute("class", "mt-4 mb-3")
    cabecera.innerHTML = "Resultados de la búsqueda"
    main.innerHTML = ""
    main.appendChild(cabecera)
    main.appendChild(resultado)
}