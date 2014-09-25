  	 	// Receiving the 3D Model's Data From the Database Server
		var num_of_vertex : int = parseInt( GetField( "OSVertexPosition3D_Num_Of_Vertex" ) );
			
		var oS3DModelVertices : Vector3[] = new Vector3[num_of_vertex];
		var oS3DModelRenderMesh : Mesh = new Mesh();
		var oS3DModelRenderGameObject : GameObject = new GameObject();
			
		for( var osVertexInputNum : int = 0 ; osVertexInputNum < num_of_vertex ; osVertexInputNum++ )
		{
			oS3DModelVertices[osVertexInputNum].x = parseFloat( GetField( "OSVertexPosition3D_Vertex_X_" + osVertexInputNum ) ) / modelScaleFactor;
			oS3DModelVertices[osVertexInputNum].y = parseFloat( GetField( "OSVertexPosition3D_Vertex_Y_" + osVertexInputNum ) ) / modelScaleFactor;
			oS3DModelVertices[osVertexInputNum].z = parseFloat( GetField( "OSVertexPosition3D_Vertex_Z_" + osVertexInputNum ) ) / modelScaleFactor;	
		}
			
		oS3DModelRenderMesh.vertices = oS3DModelVertices;
		oS3DModelRenderMesh.RecalculateBounds();