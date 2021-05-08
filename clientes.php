<?php
$arrayImages = array("GreenLantern", "Batman", "JusticeLeague", "YoungJustice", "Darkseid", "Legion",
	"Outlaws", "Outsiders", "RedLantern", "TeenTitans", "SuicideSquad");
for($i = 1; $i < 12; $i++){
?>
<div class="h-24 px-4 w-5/12  md:w-1/5 flex justify-center">
	<img src="<?php printf("assets/%s.png", $arrayImages[$i-1]);?>" alt="<?php printf("/%s", $arrayImages[$i-1]);?>" class="h-24">
</div>
<?php  
}
?>