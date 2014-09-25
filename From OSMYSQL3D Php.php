<?php

$link = mysql_connect("Your_IP_Address","Your_ID","Your_Password");

mysql_select_db("Your_Database");

$result = mysql_query("SELECT * FROM Your_Table");

$Num_Of_Vertex_Result = mysql_query( "SELECT COUNT( * ) FROM Your_Table" );

$Num_Of_Vertex = mysql_fetch_array( $Num_Of_Vertex_Result );

echo "<OSVertexPosition3D_Num_Of_Vertex:" . $Num_Of_Vertex[0] . ">";

$Vertex_Index = 0;

while( $row = mysql_fetch_array( $result ) )
{	
	echo "<OSVertexPosition3D_Vertex_X_" . $Vertex_Index . ":" . $row[0] . ">";
	echo "<OSVertexPosition3D_Vertex_Y_" . $Vertex_Index . ":" . $row[1] . ">";
	echo "<OSVertexPosition3D_Vertex_Z_" . $Vertex_Index . ":" . $row[2] . ">";
	
	$Vertex_Index++;
}

mysql_close( $link );

?>