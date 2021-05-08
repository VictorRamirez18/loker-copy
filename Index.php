<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/logo.png">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/85b2e44db4.js" crossorigin="anonymous"></script>
	<title>Index</title>
</head>
<body>
	<nav class="flex flex-wrap items-center justify-around lg:justify-start p-2 lg:px-0" id="inicio">
		<img src="assets/logo.png" class="h-16 ml-0 lg:ml-32 w-auto">
		<button id="boton" class="block md:hidden"><i class="fas fa-bars text-4xl"></i></button>
		<div class="w-full ml-2 lg:ml-12 md:w-auto md:gap-6 flex hidden md:flex flex-col md:flex-row items-center font-medium text-md" id="menu">
			<a href="WIP.php" class="text-gray-600 hover:text-gray-900">Nosotros</a>
			<a href="WIP.php" class="mt-1 lg:mt-0 text-gray-600 hover:text-gray-900">Misión</a>
			<a href="WIP.php" class="mt-1 lg:mt-0 text-gray-600 hover:text-gray-900">Visión</a>
			<a href="WIP.php" class="mt-1 lg:mt-0 text-gray-600 hover:text-gray-900">Objetivos</a>
			<a href="WIP.php" class="mt-1 lg:mt-0 text-gray-600 hover:text-gray-900">Servicios</a>
			<a href="WIP.php" class="mt-1 lg:mt-0 text-gray-600 hover:text-gray-900">Pilares</a>
			<a href="WIP.php" class="mt-1 lg:mt-0 text-gray-600 hover:text-gray-900">Contacto</a>
		</div>
	</nav>

	<section>
		<div class="h-screen flex flex-col justify-start pt-24" id="banner">
			<div class="flex flex-col w-1/2 mx-6 md:mx-24 lg:mx-32">
				<p class="text-gray-200  text-4xl md:text-5xl lg:text-6xl font-medium">
				Lorem, ipsum dolor sit amet consectetur adipisicing, elit.</p>
				<button class="mt-16 bg-blue1 hover:bg-blue-700 uppercase w-40 p-2 text-white text-xl font-medium" onclick="location.href = 'WIP.php'"><p>Contactar</p></button>
			</div>
		</div>
	</section>

	<section class="flex flex-col justify-between h-auto">
		<div class="row flex justify-between lg:py-4  sm:mx-16 lg:mx-48">
			<div class="w-full lg:w-5/12 flex flex-wrap p-10">
				<h2 class="color-blue1 text-4xl lg:text-5xl font-medium uppercase">Nosotros</h2>
				<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi odio dolores praesentium consequatur hic velit excepturi, cumque deserunt assumenda necessitatibus voluptatem sequi nihil voluptates earum quis, repellat neque obcaecati qui?</p>
				<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi odio dolores praesentium consequatur hic velit excepturi.</p>
			</div>
			<div class="w-5/12 hidden md:flex justify-end items-end ">
				<img src="assets/image1.jpg" alt="" class="w-full object-cover hidden lg:flex">
			</div>
		</div>
		<div class="row flex justify-between sm:mx-16 lg:mx-48 px-10 lg:px-0">
			<img src="assets/image2.jpeg" alt="" class="w-full md:w-5/12 h-48 md:h-auto object-cover lg:mr-16">
			<img src="assets/image3.jpg" alt="" class="w-5/12 object-cover hidden md:flex">
		</div>		
	</section>

	<section class="md:flex">
		<div class="bg-blue2 px-1 md:px-6 pt-10 pb-16 md:py-32 flex flex-col justify-start items-center">
			<div class="w-full md:w-2/3 px-6 md:pl-10">
				<h2 class="text-white text-4xl md:text-5xl font-medium uppercase">Nuestra Mision.</h2>
				<p class="text-white mt-6 pb-4 border-b-4 border-blue-500 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore accusantium veritatis soluta labore exercitationem esse blanditiis neque cumque quasi velit alias laboriosam obcaecati, iure, illum quod asperiores aspernatur voluptatibus.</p>
				<ul class="text-white mt-2 pb-4 border-b-4 border-blue-500">
					<li>Lorem</li>
					<li>Lorem</li>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Lorem</li>
				</ul>	
			</div>
			
		</div>
		<div class="bg-blue3 color-blue1 font-medium px-1 md:px-6 pt-10 pb-16 md:py-32 flex flex-col justify-start items-center">
			<div class="w-full md:w-2/3 px-6 md:pl-10">
				<h2 class="text-4xl md:text-5xl uppercase font-medium">Nuestra Vision.</h2>
				<p class="mt-6 pb-4 border-b-4 border-blue-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore accusantium veritatis soluta labore exercitationem esse blanditiis neque cumque quasi velit alias laboriosam obcaecati, iure, illum quod asperiores aspernatur voluptatibus. Quia.</p>
				<ul class="mt-2 pb-4 border-b-4 border-blue-500">
					<li>Lorem</li>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Lorem</li>
				</ul>
			</div>
			
		</div>
	</section>
	
	<section id="div-objetivos" class="px-4 md:px-16 py-32 text-white font-medium">
		<div class="row w-full">
			<div class=" mx-2 sm:mx-10 md:mx-32">
				<h2 class="text-4xl lg:text-5xl font-medium w-1/4 uppercase">Nuestros objetivos.</h2>
			</div>
		</div>
		<div class="row  mx-2 md:mx-10">
			<div class="w-full flex flex-col lg:flex-row gap-2 md:gap-4 mt-10">
				<?php include("objetivos.php");?>
			</div>
		</div>
	</section>

	<section class="px-2 sm:px-16 lg:px-32 py-4 md:py-10">
		<div class="container flex flex-col md:flex-row">
			<div class="w-full md:w-2/4 font-medium">
				<div class="flex flex-col flex-wrap md:px-6 py-10">
					<h2 class="color-blue1 w-1/2 text-3xl lg:text-5xl uppercase font-medium">Nuestros Servicios</h2>
					<p class="w-3/4 my-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dignissimos impedit sit neque rerum, incidunt adipisci mollitia inventore ipsam perspiciatis.</p>
				</div>
			</div>
			<div class="w-full md:w-1/4">
				<?php include("services.php")?>
			</div>
			<div class="w-full md:w-1/4">
				<?php include("services.php")?>
			</div>
		</div>
	</section>

	<section class="py-4 lg:pt-6 lg:pb-16" id="divTransportista">
		<div class="w-full px-2">
			<div class="w-full px-2 sm:px-16">
				<div class="mt-20 w-2/3 md:w-1/4">
					<h2 class="text-blue-400 text-2xl lg:text-5xl font-medium uppercase">¿Eres transportista?</h2>
				</div>
			</div>
		</div>
		<div class="w-full px-2 sm:px-10">
			<div class="w-full flex flex-col lg:flex-row lg:gap-6 mt-10 sm:p-4 lg:p-10">
				<?php  include("transportista.php");?>
			</div>
		</div>
	</section>

	<section class="px-2 py-6 sm:p-8 md:p-16">
		<div class="row flex justify-center">
			<div class="w-auto lg:w-1/4">
				<h2 class="color-blue1 font-medium text-4xl lg:text-5xl text-center uppercase">Nuestros clientes</h2>
			</div>
		</div>
		<div class="flex flex-wrap mt-12 w-full gap-2 md:gap-8 justify-center h-auto">
			<?php  include("clientes.php");?>
		</div>
	</section>

	<section class="md:px-10 lg:px-24 pt-28 pb-36 bg-gray-300">
		<div class="flex flex-col md:flex-row justify-between px-8">
			<?php  include("contactanos.php");?>
		</div>
	</section>

	<?php  include("whatsapp.php");?>
	<?php include("footer.php")?>
</body>
</html>
<script src="Index.js"></script>