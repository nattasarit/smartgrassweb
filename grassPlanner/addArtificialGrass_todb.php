<?php
//addArtificialGrass_todb.php



//Get variables from request
$GRASS_ID=$_POST['GRASS_ID'];
$GRASS_TYPE=$_POST['GRASS_TYPE'];
$GRASS_NAME=$_POST['GRASS_NAME'];
$GRASS_WIDTH_SIZE=$_POST['GRASS_WIDTH_SIZE'];
$GRASS_ROLL_LENGHT=$_POST['GRASS_ROLL_LENGHT'];
$PILE_HEIGHT=$_POST['PILE_HEIGHT'];
$STICH_RATE=$_POST['STICH_RATE'];
$GAUGE=$_POST['GAUGE'];
$COLOR=$_POST['COLOR'];
$PILE_DENIE=$_POST['PILE_DENIE'];
$BACKING=$_POST['BACKING'];

//path address 
$IMAGE_NAME=$_POST['IMAGE_NAME'];

//validate input and redirect to
$GRASS_ID=trim($GRASS_ID);
$GRASS_TYPE=trim($GRASS_TYPE);
$GRASS_NAME=trim($GRASS_NAME);
$GRASS_WIDTH_SIZE=trim($GRASS_WIDTH_SIZE);
$GRASS_ROLL_LENGHT=trim($GRASS_ROLL_LENGHT);
$PILE_HEIGHT=trim($PILE_HEIGHT);
$STICH_RATE=trim($STICH_RATE);
$GAUGE=trim($GAUGE);
$COLOR=trim($COLOR);
$PILE_DENIE=trim($PILE_DENIE);
$BACKING=trim($BACKING);


echo "\$GRASS_ID: ".$GRASS_ID;
echo "<BR>\$GRASS_TYPE: ".$GRASS_TYPE;
echo "<BR>\$GRASS_NAME: ".$GRASS_NAME;
echo "<BR>\$GRASS_WIDTH_SIZE: ".$GRASS_WIDTH_SIZE;
echo "<BR>\$GRASS_ROLL_LENGHT: ".$GRASS_ROLL_LENGHT;
echo "<BR>\$PILE_HEIGHT: ".$PILE_HEIGHT;
echo "<BR>\$STICH_RATE: ".$STICH_RATE;
echo "<BR>\$GAUGE: ".$GAUGE;
echo "<BR>\$COLOR: ".$COLOR;
echo "<BR>\$PILE_DENIE: ".$PILE_DENIE;
echo "<BR>\$BACKING: ".$BACKING;

//send to webservice and redirect to listing page grass.
/*

header('Location: http://www.example.com/');
exit;

*/




?>