	var OSVertexPosition3D_Vertex : Vector3[] =  importedMesh.vertices;
		
	var addFieldID_OSVertexPosition3D_X : String;
	var addFieldID_OSVertexPosition3D_Y : String;
	var addFieldID_OSVertexPosition3D_Z : String;
		
	modelScaleFactor = 100;
		
  	mYSQL3DWWWForm.AddField( "Num_Of_OSVertexPosition3D" , OSVertexPosition3D_Vertex.Length );
  		
  	for( var osVertexNum : int = 0 ; osVertexNum < OSVertexPosition3D_Vertex.Length ; osVertexNum++ )
  	{
  		addFieldID_OSVertexPosition3D_X = "OSVertexPosition3D_Vertex_X_Num_" + osVertexNum;
  		addFieldID_OSVertexPosition3D_Y = "OSVertexPosition3D_Vertex_Y_Num_" + osVertexNum;
  		addFieldID_OSVertexPosition3D_Z = "OSVertexPosition3D_Vertex_Z_Num_" + osVertexNum;
  			
  		mYSQL3DWWWForm.AddField( addFieldID_OSVertexPosition3D_X, OSVertexPosition3D_Vertex[osVertexNum].x * modelScaleFactor );
  		mYSQL3DWWWForm.AddField( addFieldID_OSVertexPosition3D_Y, OSVertexPosition3D_Vertex[osVertexNum].y * modelScaleFactor );
  		mYSQL3DWWWForm.AddField( addFieldID_OSVertexPosition3D_Z, OSVertexPosition3D_Vertex[osVertexNum].z * modelScaleFactor );
  	}