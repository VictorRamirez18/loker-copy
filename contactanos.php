<?php 
$array = array("Contáctanos", "Ubicación");
$flag = "lg:border-l-4 lg:border-blue-400 ";
for($i = 0; $i < 2; $i++){
?>
<div class="px-3 w-full md:w-5/12 lg:mt-0 <?php if($i == 1) echo $flag; echo "mt-4"?>">
	<h2 class="color-blue1 text-2xl lg:text-5xl font-medium uppercase"><?php echo $array[$i];?></h2>
	<p class="pb-4 mb-4 border-b-4 border-blue-500 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ipsum dolore excepturi soluta unde aspernatur nisi dolorem alias exercitationem distinctio accusantium ut incidunt, quas iure officiis, hic quos ullam cumque.</p>
	<ul class="pb-4 <?php if($i != 1) echo 'border-b-4';?> border-blue-500">
		<li>Lorem ipsum dolor sit</li>
		<li>Lorem ipsum dolor sit</li>
		<li>Lorem ipsum dolor sit</li>
		<li>Lorem ipsum dolor sit</li>
		<li>Lorem ipsum dolor sit</li>
	</ul>
</div>

<?php 
}
?>