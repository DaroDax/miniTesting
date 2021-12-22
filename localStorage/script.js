function guardarLocalStorage(){

	let persona = {
		nombre:'Fernando',
		edad:'30',
		correo:'ejemplo@gmail.com',
		coords:{
			lat:10,
			lng:-10
		}
	}; //Formato JSON

	let nombre = 'Juan'; //Variable

	localStorage.setItem( 'nombre', nombre ); //Guardar variables

	localStorage.setItem( 'persona', JSON.stringify(persona) ); //Guardar arrays u objetos 

	alert("Se guardo la información en el navegador");
}

//--------------------------------------------------------------------------------//

function obtenerLocalStorage(){

	if ( localStorage.getItem( 'nombre' ) && localStorage.getItem( 'persona' )) {
		let nombre = localStorage.getItem( 'nombre' );
		let persona = JSON.parse( localStorage.getItem( 'persona' ) );
		alert(nombre);
		console.log(persona);
	}else{
		alert("No hay informacion guardada");
	}
}

//---------------------------------------------------------------------------------//

function borrarLocalStorage(){
	localStorage.removeItem( 'nombre' );
	localStorage.removeItem( 'persona' );

	alert("Se ha borrado la información del navegador");
	
}