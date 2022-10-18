document.addEventListener("DOMContentLoaded", function(event){
	
	loadEstacion(chipid.textContent).then(datos =>{
		console.log(datos)
		
		document.querySelector('.fecha').textContent=datos[0].fecha;
		document.querySelector('.temperatura').textContent=datos[0].temperatura+"°C";
		document.querySelector('.humedad').textContent=datos[0].humedad+"%";

})


	})
       async function loadEstacion(id){
      	const response= await fetch("api2/estaciones/info/" + id + "/1");
		
		const data = await response.json();
		return data;

		}



document.addEventListener("DOMContentLoaded", function(event){
	
	loadEstacion1(chipid.textContent).then(datos =>{
		console.log(datos)
		document.querySelector('.nombre').textContent=datos.ubicacion;
		

})


	})
       async function loadEstacion1(id){
      	const response= await fetch("api2/estaciones/buscar/"+id);
		
		const data = await response.json();
		return data;

		}