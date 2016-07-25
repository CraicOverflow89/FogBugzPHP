<?php

	function actionSessionLogin(string $username, string $password)
	{
		try
		{
			$result = file_get_contents("http://medicapp.fogbugz.com/api.asp?cmd=logon&email=".$username."&password=".$password);
			return json_decode(json_encode(simplexml_load_string($result)), TRUE);
			//if(result.statusCode == "200 OK" && findNoCase("<token>", result.fileContent)) {return {success:true, token:xmlParse(result.fileContent).response.token.XmlText, result:result};}
			//return {success:false, error:result.errorDetail};
		}
		//catch(any ex) {return {success:false, error:ex};}
		catch(Exception $ex) {return false;}
	}

?>