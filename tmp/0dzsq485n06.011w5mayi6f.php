<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
	<title>Where The Fu** Are You? </title>
	<meta name="description" content="">
  <base href="<?php echo $BASE; ?>/" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Arapey" rel="stylesheet" type="text/css" />
  <link href="public/stylesheet/style.css" rel="stylesheet" type="text/css" />
  <link href="public/stylesheet/mfglabs_iconset.css" rel="stylesheet"  type="text/css" />
  <link href="public/stylesheet/wtfay.css" rel="stylesheet" type="text/css" />
  
</head>
<body>
  <header>
    
    
    <a href="" class="logo">test</a>
    
  </header>
  

    <div class="error"></div>

    <?php if ($error != ''): ?>
          
          <span><?php echo $error; ?></span>
          
      <?php endif; ?>
    <form action="signin/" id="signin" method="post">
      <input type="text" name="login" placeholder="login" />
      <input type="password" name="password" placeholder="password" />
      <input type="submit" value="Sign in"/>
    </form>
   

  
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="public/js/wtfay.js"></script>
</body>
</html>