<?php

$link = mysql_connect("Your_IP_Address","Your_ID","Your_Password");

mysql_select_db("Your_Database");

$Num_Of_Vertex = json_decode( $_POST["Num_Of_OSVertexPosition3D"] );

$Num_Of_ID_Digit = 10;
$Num_Of_Digit = 0;

$OSVertexPosition3D_ID = "";
$OSVertexPosition3D_ID_Prefix = "OSVP3D";

for( $OSVertexPosition3D_Num = 0 ; $OSVertexPosition3D_Num < $Num_Of_Vertex ; $OSVertexPosition3D_Num++ )
{
	$OSVertexPosition3D_ID = $OSVertexPosition3D_ID_Prefix;
	
	$OSVertexPosition3D_Num_Str = strval( $OSVertexPosition3D_Num );
	$OSVertexPosition3D_Num_Str_Len = strlen( $OSVertexPosition3D_Num_Str );
	
	$Num_Of_Digit = $Num_Of_ID_Digit - $OSVertexPosition3D_Num_Str_Len;
	
	// Check Current Number of Digit
	for( $Digit_Num = 0 ; $Digit_Num < $Num_Of_Digit ; $Digit_Num++ )
	{
		$OSVertexPosition3D_ID .= "0";
	}
	
	$OSVertexPosition3D_ID .= strval( $OSVertexPosition3D_Num );
	
	$POST_ID_OSVertexPosition3D_X_Coordinate = "OSVertexPosition3D_Vertex_X_Num_";
	$POST_ID_OSVertexPosition3D_X_Coordinate .= strval(	$OSVertexPosition3D_Num );
	
	$POST_ID_OSVertexPosition3D_Y_Coordinate = "OSVertexPosition3D_Vertex_Y_Num_";
	$POST_ID_OSVertexPosition3D_Y_Coordinate .= strval( $OSVertexPosition3D_Num );
	
	$POST_ID_OSVertexPosition3D_Z_Coordinate = "OSVertexPosition3D_Vertex_Z_Num_";
	$POST_ID_OSVertexPosition3D_Z_Coordinate .= strval( $OSVertexPosition3D_Num );
	
	$OSVertexPosition3D_X_Coordinate = json_decode( $_POST[$POST_ID_OSVertexPosition3D_X_Coordinate] );
	$OSVertexPosition3D_Y_Coordinate = json_decode( $_POST[$POST_ID_OSVertexPosition3D_Y_Coordinate] );
	$OSVertexPosition3D_Z_Coordinate = json_decode( $_POST[$POST_ID_OSVertexPosition3D_Z_Coordinate] );
	
	$result = mysql_query( "INSERT INTO osvertexposition3d( x_coordinate , y_coordinate , z_coordinate, id_osvertexposition3d ) VALUES (  " . $OSVertexPosition3D_X_Coordinate . " , " . $OSVertexPosition3D_Y_Coordinate . " , " . $OSVertexPosition3D_Z_Coordinate . " , \"" . $OSVertexPosition3D_ID . "\")"  );
	
}

mysql_close($link);

?>