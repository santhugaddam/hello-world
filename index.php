<?php
error_reporting(0);

$json_pokedex = file_get_contents('data/pokedex.json');
$data_pokedex = json_decode($json_pokedex, true);

$json_types = file_get_contents('data/types.json');
$data_types = json_decode($json_types, true);

$json_skills = file_get_contents('data/skills.json');
$data_skills = json_decode($json_skills, true);

foreach($data_pokedex as $key=> $value) {

foreach($value as $key2=> $value2) {

if($key2 == 'id') {
$id = addslashes($value2);
}

if($key2 == 'flatName') {
if(!empty($value2)) {
$ename = addslashes($value2);
}
}
elseif($key2 == 'ename') {
$ename = addslashes($value2);
}
elseif($key2 == 'type') {
$type_array = $value2;

foreach($type_array as $type_key => $type_value) {
$type.=addslashes($type_value);
}

}
else {
}

}

  $pokedex_data.=  '<tr>
                <td style="width:10%;text-align:center;">'.$id.'</td>
                <td style="width:20%;text-align:center;">'.$ename.'</td>
                <td style="width:30%;text-align:center;" id="'.$id.'"><img src="images/thm/'.$id.$ename.'.png" style="cursor:pointer;"/></td>
                <td style="width:30%;text-align:center;">'.$type.'</td>
            </tr>';
			$type = '';
}

?>
<html>
<head>
<title>Pokedex Gallery</title>
<!--<script src="js/jquery.1.5.2.js"></script>-->
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
<style>
.pokeman-gallery {
width:100%;
padding:5px;
}
.pokedex-img {
width:9%;
float:left;
}
div.container {
width: 80%;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    $('#pokedex-table').DataTable({
	 "bPaginate": false
	});
} );
</script>
</head>
<body>
<div class="pokeman-gallery">
<?php 
// echo $pokedex_data;
?>
</div>
<div>
		<table id="pokedex-table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Type</th>
            </tr>
        </thead>
		
		 <tbody>
           <?php 
			echo $pokedex_data;
			?> 
			
		</tbody>
		</table>
		</div>


</body>
</html>