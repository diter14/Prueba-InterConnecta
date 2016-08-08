<?php 
	//Cadena que almacena el authToken
	$crm_authtoken = '4f86a4c7e8f1b2505ff9ba5ae58f3c53';
	//Cadena para obtener los récords
	$crm_url="https://crm.zoho.com/crm/private/json/Leads/getRecords?authtoken=".$crm_authtoken."&scope=crmapi&selectColumns=Leads(First%20Name,Last%20Name,Email)";
	//Obtener los récords en formato JSON
	$crm_json=file_get_contents($crm_url);
	//Decodificar para convertir JSON en un arreglo
	$crm_array=json_decode($crm_json,true);
	//Crear nuevo array para obtener estrictamente los fields solicitados
	$row_data = $crm_array['response']['result']['Leads']['row'];
	$i=0;//Almacena el índice correspondiente a cada fila
	//Recorrer el arreglo y almacenar los récords de manera asociativa
	foreach ($row_data as $row) {
		$fl_data = $row['FL'];
		foreach ($fl_data as $fl) {
			$getData[$i][$fl['val']] = $fl['content'];
		}
		$i++;
	}
 ?>
