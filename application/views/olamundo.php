<!DOCTYPE html>
<html>	
<head>
  <title> <?php echo $mensagem ?></title>
</head>
<body>
  <h1><?php 
  $this->load->library('encryption');
  echo $mensagem.$this->encryption->encrypt($mensagem) ?></h1>
</body>
</html>  