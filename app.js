
document.addEventListener("DOMContentLoaded",cargarMarcas());

function cargarMarcas(){
	$.ajax({
		type: 'POST',
		url: 'iniciar.php',
		data: "",
		success: function (respuesta) {

			$("#marca").html(respuesta);

		}
	});
}

$("#marca").change(function () {
	let marca = document.getElementById("marca").value;
	$("#modelo").empty();
	$("#agno").empty();
	if (marca == "seleccionar") {
		
	} else {


		marca = "marca=" + marca;

		$.ajax({
			type: 'POST',
			url: 'back.php',
			data: marca,
			success: function (respuesta) {

				$("#modelo").html(respuesta);

			}
		});

	}
})

$("#modelo").change(function () {
	let modelo = document.getElementById("modelo").value;
	let marca = document.getElementById("marca").value;

	$("#agno").empty();



	modelo = "modelo=" + modelo + "&marca=" + marca;

	$.ajax({
		type: 'POST',
		url: 'backModeloMarca.php',
		data: modelo,
		success: function (respuesta) {

			$("#agno").html(respuesta);

		}
	});
})


$("#buscador").click(function () {
	let modelo = document.getElementById("modelo").value;
	let marca = document.getElementById("marca").value;
	let agno = document.getElementById("agno").value;
	let precioMin = document.getElementById("precioMin").value;
	let precioMax = document.getElementById("precioMax").value;
	let palabraClave = document.getElementById("palabraClave").value;

	if(modelo.length==0 || marca.length==0 ||agno.length==0|| precioMin.length==0 || precioMax.length==0  || palabraClave.length==0){
		$("#errores").html("es necesario que rellenes todos los campos");
	}else if(precioMin>precioMax){
		$("#errores").html("el precio Mayor no puede ser menor que el menor");
	}
	
	
	else{

		$("#errores").html("  ");

	let envio = "modelo=" + modelo + "&marca=" + marca + "&agno=" + agno + "&precioMin=" + precioMin + "&precioMax=" + precioMax + "&palabraClave=" + palabraClave;


	$.ajax({
		type: 'POST',
		url: 'backTotal.php',
		data: envio,
		success: function (respuesta) {
			console.log(respuesta);
			$("#resultados").html(respuesta);

		}
	});
}
})


$("#vaciar").click(function(){
	$("#agno").empty();
	$("#modelo").empty();
	$("#marca").empty();
	$("#palabraClave").val("");
	$("#precioMin").val("");
	$("#precioMax").val("");
	cargarMarcas();

})