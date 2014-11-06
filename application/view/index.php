<?php
	class view
	{
		public function getHtml($data)
		{
			//return $data;
			ob_start();
			include('./templates/index.php');
			$output = ob_get_contents();
			ob_end_clean();
			return $output;
		}
	}

?>