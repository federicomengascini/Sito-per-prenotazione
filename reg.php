<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Ristorante da Federico e Simone</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts from Google -->
 
    <style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: yellowgreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>
</head>

<body>

    <!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                	<span class="glyphicon glyphicon-fire"></span> 
                	SiFe
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="\">Home</a>
                    </li>
                    <li>
                        <a href="prenota">Prenota</a>
                    </li>
					
                    <li class="active">
                        <a href="contatti">Contatti</a>
                    </li>
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

	<!-- Content 1 -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-responsive img-circle center-block" src="images/like.png" alt="">
                </div>
                <div class="col-sm-6">
					<h1 style="color: white">Prenotazione Avvenuta Con Successo</h1>
					<a style="background-color: #9acd32 ;
					border: none;
					color: white;
					padding: 15px 32px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 16px;
					margin: 4px 2px;
					cursor: pointer;"href="\" class="button">Torna alla Home</a>
					<a style="background-color: #9acd32 ;
					border: none;
					color: white;
					padding: 15px 32px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 16px;
					margin: 4px 2px;
					cursor: pointer;"href="\listaprenotazioni.txt" class="button">Lista Prenotazioni</a>
                	<?php
if(isset($_POST["submit"]))
{


    $fileHandle = fopen('listaprenotazioni.txt', 'a')
            OR die ("Can't open file\n");
	$nome=$_POST["nome"];
	$cognome=$_POST["cognome"];
    $email=$_POST["email"];
	$telefono=$_POST["telefono"];
    $result = fwrite ($fileHandle, $nome . " ");
	if ($result) {
					$result = fwrite ($fileHandle, $cognome . " - ");}
		if ($result) {
							$result = fwrite ($fileHandle, $email . " - ");} 
			if ($result) {
								$result = fwrite ($fileHandle, $telefono . "  \n");}; 	
    if ($result)
         {
             print '<script type="text/javascript">'; 
             print 'alert("Prenotazione Aggiunta!")'; 
             print '</script>';  
        } else {
            print '<script type="text/javascript">'; 
            print 'alert("Impossibile prenotare!")'; 
            print '</script>';  
        };
    fclose($fileHandle);
}
 
    ?>
                </div>  
				
                
            </div>
        </div>
    </section>

   
    
	<!-- Footer -->
    <footer class="page-footer">
    

        	
        <!-- Copyright etc -->
        <div class="small-print">
        	<div class="container">
        		<p>Copyright &copy; Sife.com 2018</p>
        	</div>
        </div>
        
    </footer>

    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>

</body>

</html>