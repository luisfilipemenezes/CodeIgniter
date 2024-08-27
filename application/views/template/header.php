<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Massively by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/main.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<noscript><link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/noscript.css" /></noscript>
	</head>
	<body class="">
	
	<script>
		
		<?php foreach ($scripts as $script): ?>
        <script src="<?php echo base_url('assets/js/' . $script); ?>"></script>
    <?php endforeach; ?>
    <script>
        // Passando o user_id do PHP para uma variável JavaScript
        var userId = <?php echo json_encode($user_data->user_id); ?>;

        // Exibindo o user_id no console
        console.log('User ID:', userId);
    </script>


		 async function login(){
				
			document.addEventListener("DOMContentLoaded", function() {
			// Acessando o user_id a partir do atributo data-user-id
			var userId = document.getElementById("user-info").getAttribute("data-user-id");
			console.log(userId); // Agora você pode usar userId em seu código JavaScript
        });
			
			
		}

        function activateMenuItem() {
            // Obtém o endpoint atual da URL
            const currentUrl = window.location.pathname;

            // Remove a classe 'active' de todos os itens <li>
            const items = document.querySelectorAll('#nav .links li');
            items.forEach(item => item.classList.remove('active'));

            // Verifica se o endpoint termina com 'home'
            if (currentUrl.endsWith('/home')) {
                const homeItem = document.getElementById('home-item');
                if (homeItem) {
                    homeItem.classList.add('active');
                }
            }
            else if(currentUrl.endsWith('/restrict')) {
				const homeItem = document.getElementById('restrict');
                if (homeItem) {
                    homeItem.classList.add('active');
                }
			}
        }

        // Chama a função ao carregar a página
        window.addEventListener('load', activateMenuItem);
    </script>

	<?php 
		if(isset($styles)){
			foreach($styles as $style_name){
				$href = base_url() . "public/css" . $style_name; ?>
					<link href= "<?php $href?>"  rel = "stylesheet"><?php 
			}
		}?>


		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro" >
						<nav id="nav">
							<ul class="links">
								<li id="home-item"><a onclick="handleClick(event,this)" href="<?php echo base_url(); ?>home">Home</a></li>
								<li><a href="<?php echo base_url(); ?>#">Generic Page</a></li>
								<li><a href="<?php echo base_url(); ?>public/elements.html">Elements Reference</a></li>
								<li id="restrict"><a href="<?php echo base_url(); ?>restrict">Login</a></li>
							</ul>
							<ul class="icons">
								<li><a href="<?php echo base_url(); ?>public/#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
							</ul>
						</nav>
						<h1 style="margin-top: 50px;">This is<br />
						OMNILINK</h1>
						<p style="margin-top: 20px;">A Omnilink oferece integração completa de soluções para gerenciamento de risco, gestão de frotas, rastreamento de veículos, telemetria avançada, iscas eletrônicas de cargas e câmeras embarcadas para diminuir o custo operacional.</p>
						<ul class="actions">
							<li><a href=" #header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

					<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
					<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

				<!-- Header -->
					

					

					

					
				

				
