<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Bigtravel - Sua Melhor Agência de Viagens</title>
<!--META TAGS-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Gustavo Vaz">
	<meta name="descryption" content="Agência de Turismo e Pacotes de Viagens">
	<meta name="keywords" content="turismo,viagens,pacotes,hoteis,passagens,passeios">
	<meta name="robots" content="index,follow">
<!--ICON-->
	<link rel="icon" href="img/favicon.svg">
<!--MATERIALIZE CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!--CUSTOM CSS-->
	<link rel="stylesheet" href="css/custom.css">
<!--GOOGLE ICONS-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--FONT AWESOME-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--HEADER SECTION - MENU-->
<!--SIDENAV-->
	<header>
		<ul class="sidenav" id="menu-mobile">
					<li><a href="#home" class="sidenav-close white-text">Home</a></li>
					<li><a href="#about" class="sidenav-close white-text">Sobre a Bigtravel</a></li>
					<li><a href="#trips" class="sidenav-close white-text">Pacotes</a></li>
					<li><a href="#units" class="sidenav-close white-text">Unidades</a></li>	
					<li><a href="#contact" class="sidenav-close white-text">Contato</a></li>
				</ul>
<!--MAIN MENU-->
		<div class="navbar-fixed">
		<nav class="navbar z-depth-0">
			<div class="nav-wrapper container">
				<h2 class="logo-txt">Bigtravel - Agência de Viagens</h2>
				<a href="index.html"><img src="img/logo.svg" alt="Bigtravel - Agência de Viagens" class="logo-img"></a>
				<ul class="menu right hide-on-med-and-down">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">Sobre a Bigtravel</a></li>
					<li><a href="#trips">Pacotes</a></li>
					<li><a href="#units">Unidades</a></li>	
					<li><a href="#contact">Contato</a></li>
				</ul>
				<a href="#" class="sidenav-trigger right" data-target="menu-mobile"><i class="material-icons">menu</i></a>				
			</div>
		</nav>
		</div>
	</header>
<!--SUCCESS MESSAGE-->
	<? if( isset($_GET['status']) && $_GET['status'] == 'success' ) { ?>
		<script>alert("Mensagem enviada com sucesso!");</script>
	<? } ?>
<!-- ERROR MESSAGE-->
	<? if( isset($_GET['status']) && $_GET['status'] == 'error' ) { ?>
		<div class="bg-info pt-2 text-white d-flex justify-content-center">
			<script>alert("Falha ao enviar mensagem, tente novamente!");</script>
		</div>
	<? } ?>
<!--HOME SECTION-->
	<section class="home block" id="home"> 
		<div class="banner row container">
			<div class="col s12 center">
				<h2 class="white-text">A Viagem dos Seus Sonhos Aqui!</h2>
				<p class="white-text light">Temos as melhores opções para você fazer sua viagem com conforto, segurança e muita diversão. Conheça nossos pacotes nacionais e internacionais, deixe a Bigtravel tornar a sua viagem a experiência mais inesquecível da sua vida.</p>
				<a href="#about" class="btn btn-about btn-large primary-color secondary-color">Sobre nós</a>
				<a href="#contact" class="btn btn-contact btn-large black-text">Contato</a>
			</div>
		</div>
	</section>
<!--ABOUT SECTION-->
	<section class="about block" id="about">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="light standard-title">Sobre nós</h2>
			</div>	
			<div class="col s12 l6">
				<p class="light standard-text">A Bigtravel Agência de Viagens e Turismo é uma empresa que se faz presente por todo o país, nas principais capitais da região sudeste e sul. Trabalhamos com viagens e turismos para vários destinos nacionais e internacionais, possuímos fortes vínculos e parcerias com mais de 150 hotéis espalhados pelo mundo, contamos também com uma grande estrutura e profissionais dedicados para fazer da sua viagem mais que uma simples viagem e sim uma experiência inesquecível.</p>
			</div>
			<div class="col s12 l6">
				<div class="carousel carousel-slider">
					<a class="carousel-item" href="#">
						<img src="img/banner1.jpg" alt="Imagem institucional">
					</a>
					<a class="carousel-item" href="#">
						<img src="img/banner2.jpg" alt="Imagem institucional">
					</a>
					<a class="carousel-item" href="#">
						<img src="img/banner3.jpg" alt="Imagem institucional">
					</a>
				</div>

			</div>						
		</div>	
<!--STATUTE SECTION-->
		<div class="mvv row primary-color">
			<div class="container">
				<article class="item col s12 m4 center">				
					<span class="icon"><i class="material-icons medium">directions_run</i></span>
					<h4 class="white-text light">Missão</h4>
					<p class="white-text light">Atuar com excelência, eficiência e extrema qulidade no serviço de agenciamento de viagens a negócios e lazer e no suporte a eventos, garantindo a criação e geração de valor para clientes, equipe e sociedade promovendo a satisfação total de cliente e a sustentabilidade do negócio.</p>
				</article>
				<article class="item col s12 m4 center">				
					<span class="icon"><i class="material-icons medium">visibility</i></span>
					<h4 class="white-text light">Visão</h4>
					<p class="white-text light">Ser a melhor empresa com maior eficiência no segmento do Turismo proporcionando experiências únicas. Ser a maior e mais reconhecida empresa do ramo no Brasil, possuindo o máximo de filiais possíveis em todo o território nacional atendendo assim o máximo possível de clientes.</p>
				</article>	
				<article class="item col s12 m4 center">				
					<span class="icon"><i class="material-icons medium">grade</i></span>
					<h4 class="white-text light">Valores</h4>
					<p class="white-text light">Assumimos o compromisso inegociável de operar com total integridade, honestidade, transparência, comprometimento e qualidade em todos os negócios. Valorizamos também todos os nossos parceiros, colaboradores, fornecedores e especialmente todos os nossos clientes.</p>
				</article>								
			</div>
		</div>
	</section>
<!--TRIPS SECTION-->
	<section class="trips block" id="trips">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="standard-title white-text light">Pacotes</h2>
				<p class="white-text light standard-text">Possuímos uma gama enorme de pacotes de viagem para todos os destinos do planeta, nacional ou internacional, não importa, a Bigtravel estará presente em todo o mundo para te atender com qualidade e eficiência. Confira nossos pacotes!</p>
			</div>
		</div>
		<div class="row container">
<!--NORTH AMERICA - CONTENT-->			
			<article class="col s12 m6 l3">
				<div class="card">
					<div class="card-image">
						<img src="img/america.jpg" alt="América do Norte" class="materialboxed">
						<a href="#modal-americadonorte" class="btn btn-floating halfway-fab primary-color secondary-color modal-trigger"><i class="material-icons">more_horiz</i></a>
					</div>
					<div class="card-content">
						<h5>América</h5>
						<p>EUA e Canadá são os principais destinos quando falamos em América do Norte, s cultura americana...</p>
					</div>
				</div>
			</article>
<!--NORTH AMERICA - MODAL-->	
			<div class="modal" id="modal-americadonorte">
				<div class="modal-content">					
					<h5>Estados Unidos e Canadá</h5>
					<p class="light">Os EUA e o Canadá são 2 dos destinos mais procurados pelos "viajantes" de todo mundo, não é segredo para ninguém que principalmente a cultura americana é vista com bons olhos pela maioria da população mundial. Conheça um pouco mais sobre esse país.<br><br>
					<img src="img/modal1.jpg" width="600px"><br><br>
					Banhado pelos oceanos Pacífico e Atlântico, faz fronteira com o Canadá ao norte e com o México ao sul. O estado do Alasca está no noroeste do continente, fazendo fronteira com o Canadá no leste e com a Rússia a oeste, através do estreito de Bering. O estado do Havaí é um arquipélago no Pacífico Central. O país também possui vários outros territórios no Caribe e no Oceano Pacífico. Com 9,37 milhões de km² de área e uma população de mais de 300 milhões de habitantes, o país é o quarto maior em área total, o quinto maior em área contígua e o terceiro em população. Os Estados Unidos são uma das nações mais multiculturais e etnicamente diversas do mundo, produto da forte imigração vinda de muitos países. Sua geografia e sistemas climáticos também são extremamente diversificados, com desertos, planícies, florestas e montanhas que abrigam uma grande variedade de espécies. Os paleoindígenas que migraram da Ásia há quinze mil anos, habitam o que é hoje o território dos Estados Unidos até os dias atuais. Esta população nativa foi muito reduzida após o contato com os europeus devido a doenças e guerras. Os Estados Unidos foram fundados pelas treze colônias do Império Britânico localizadas ao longo da sua costa atlântica. Em 4 de julho de 1776, foi emitida a Declaração de Independência, que proclamou o seu direito à autodeterminação e a criação de uma união cooperativa. Os estados rebeldes derrotaram a Grã-Bretanha na Guerra Revolucionária Americana, a primeira guerra colonial bem sucedida da Idade Contemporânea. A Convenção de Filadélfia aprovou a atual Constituição dos Estados Unidos em 17 de setembro de 1787; sua ratificação no ano seguinte tornou os estados parte de uma única república com um forte governo central. A Carta dos Direitos, composta por dez emendas constitucionais que garantem vários direitos civis e liberdades fundamentais, foi ratificada em 1791.</p>
				</div>
				<div class="modal-footer">
					<a class="btn primary-color secondary-color modal-action modal-close">Sair</a>
				</div>
			</div>
<!--EUROPE - CONTENT-->
			<article class="col s12 m6 l3">
				<div class="card">
					<div class="card-image">
						<img src="img/europa.jpg" alt="Europa" class="materialboxed">
						<a href="#modal-europa" class="btn btn-floating halfway-fab primary-color secondary-color modal-trigger"><i class="material-icons">more_horiz</i></a>
					</div>
					<div class="card-content">
						<h5>Europa</h5>
						<p>Que tal conhecer o velho continente de trem?! Veja aqui os motivos que te fazem conhecer a Europa...</p>
					</div>
				</div>
			</article>
<!--EUROPE - MODAL-->	
			<div class="modal" id="modal-europa">
				<div class="modal-content">					
					<h5>Europa</h5>
					<p class="light">Conheça os 8 motivos para viajar pela Europa de Trem. Viajar pela Europa é o sonho de muitas pessoas. Seja por um país, ou mais, desvendar as aventuras que esse tipo de viagem proporciona é sem duvidas uma experiência memorável. E uma das melhores formas de realizar viagens pela Europa é utilizando trens. Motivos para escolher tal meio de transporte não faltam, e nós listamos 10 deles para te provar que descobrir o continente de Trem pode ser incrível! Confira:<br><br>
					<ul class="collection">
						<li class="collection-item">Conforto. Com assentos geralmente largos e confortáveis, os trens ganham nesse quesito de aviões e de carros...</li>
						<li class="collection-item">Fácil acesso</li>
						<li class="collection-item">Possibilidade de viajar durante a noite</li>
						<li class="collection-item">Apreciar a paisagem</li>
						<li class="collection-item">Bagagem</li>
						<li class="collection-item">Sem check-in</li>
						<li class="collection-item">Conectado</li>
						<li class="collection-item">Meio ambiente</li>
					</ul>
					</p>
				</div>
				<div class="modal-footer">
					<a class="btn primary-color secondary-color modal-action modal-close">Sair</a>
				</div>
			</div>	
<!--AFRICA - CONTENT-->
			<article class="col s12 m6 l3">
				<div class="card">
					<div class="card-image">
						<img src="img/africa.jpg" alt="África" class="materialboxed">
						<a href="#modal-africa" class="btn btn-floating halfway-fab primary-color secondary-color modal-trigger"><i class="material-icons">more_horiz</i></a>
					</div>
					<div class="card-content">
						<h5>África</h5>
						<p>Paisagens espetaculares, safaris naturais onde você pode conhecer os animais selvagens em seu habitat...</p>
					</div>
				</div>
			</article>
<!--AFRICA - MODAL-->	
			<div class="modal" id="modal-africa">
				<div class="modal-content">					
					<h5>África</h5>
					<p class="light">
					Paisagens espetaculares, safaris naturais onde você pode conhecer os animais selvagens em seu habitat natural...esse é o continente africano. Cheio de belezas naturais e a maravilhosa presença dos animais...Perfito para descansar e aproveitar as belezas naturais...
					</p>
				</div>
				<div class="modal-footer">
					<a class="btn primary-color secondary-color modal-action modal-close">Sair</a>
				</div>
			</div>				
<!--ASIA - CONTENT-->
			<article class="col s12 m6 l3">
				<div class="card">
					<div class="card-image">
						<img src="img/asia.jpg" alt="Ásia" class="materialboxed">
						<a href="#modal-asia" class="btn btn-floating halfway-fab primary-color secondary-color modal-trigger"><i class="material-icons">more_horiz</i></a>
					</div>
					<div class="card-content">
						<h5>Ásia</h5>
						<p>Culturas milenares, culinária exotica e belezas naturais...estamos falando da Ásia o mais...</p>
					</div>
				</div>
			</article>
<!--ASIA - MODAL-->	
			<div class="modal" id="modal-asia">
				<div class="modal-content">					
					<h5>Ásia</h5>
					<p class="light">
					A Ásia é o maior dos continentes, tanto em área como em população. Abrange um terço das partes sólidas da superfície da Terra e é responsável por abrigar quase três quintos da população mundial. A Ásia faz fronteira no lado ocidental com a África e com a Europa, e no lado oriental com o oceano Pacífico, a Oceania e, em menor proporção, com a América do Norte, pelo Estreito de Bering. O ponto extremo setentrional do continente está localizado no oceano Glacial Ártico. Mas na parte meridional, a Ásia chega ao seu final na região mais quente dos trópicos, nas imediações da linha do equador.[1] Na Ásia são encontradas algumas das montanhas mais altas do mundo; os rios mais extensos; os maiores desertos, planícies e planaltos; as selvas e florestas mais densas. A altitude máxima e a mínima está localizada na Ásia. O monte Everest, a altitude máxima do planeta, está localizada a 8 848 m acima do nível do mar; ao longo da linha fronteiriça da República Democrática Federal do Nepal com a região autônoma chinesa do Tibete. O litoral do mar Morto, a planície de menor altitude do mundo, estão localizadas a 396 m abaixo do nível do mar, na região fronteiriça do Estado de Israel com o Reino Hashemita da Jordânia.<br><br>
					<img src="img/modal4.jpg" width="600px" class="materialboxed">
					</p>
				</div>
				<div class="modal-footer">
					<a class="btn primary-color secondary-color modal-action modal-close">Sair</a>
				</div>
			</div>	
			</div>			
		</div>
<!--SCHEDULE-->		
		<div class="row center">
			 <a href="#tabela-horarios" class="btn btn-large primary-color secondary-color modal-trigger btn-date"><i class="material-icons left">timer</i>Tabela de Horários</a>
		</div>
		<div class="modal" id="tabela-horarios">
			<div class="modal-content">
				<h5 class="light">Tabela de Horários</h5>
				<ul class="tabs">
					<li class="tab col s3"><a href="#tabela-sp">São Paulo</a></li>
					<li class="tab col s3"><a href="#tabela-bh">Belo Horizonte</a></li>
					<li class="tab col s3"><a href="#tabela-floripa">Florianópolis</a></li>
					<li class="tab col s3"><a href="#tabela-curitiba">Curitiba</a></li>
				</ul>
<!--SCHEDULE TABLE - SÃO PAULO-->				
				<table class="striped responsive-table" id="tabela-sp">
					<thead>
						<tr>
							<th></th>
							<th>Segunda</th>
							<th>Terça</th>
							<th>Quarta</th>
							<th>Quinta</th>
							<th>Sexta</th>
							<th>Sábado</th>
							<th>Domingo</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>08:00 ás :12:00</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Fechado</td>
						</tr>
						<tr>
							<td>13:00 ás :18:00</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Fechado</td>
							<td>Fechado</td>
						</tr>
					</tbody>
				</table>
<!--SCHEDULE TABLE - BELO HORIZONTE-->				
				<table class="striped responsive-table" id="tabela-bh">
					<thead>
						<tr>
							<th></th>
							<th>Segunda</th>
							<th>Terça</th>
							<th>Quarta</th>
							<th>Quinta</th>
							<th>Sexta</th>
							<th>Sábado</th>
							<th>Domingo</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>08:00 ás :12:00</td>
							<td>Fechado</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Fechado</td>
						</tr>
						<tr>
							<td>13:00 ás :18:00</td>
							<td>Fechado</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Fechado</td>
						</tr>
					</tbody>
				</table>
<!--SCHEDULE TABLE - FLORIANÓPOLIS-->				
				<table class="striped responsive-table" id="tabela-floripa">
					<thead>
						<tr>
							<th></th>
							<th>Segunda</th>
							<th>Terça</th>
							<th>Quarta</th>
							<th>Quinta</th>
							<th>Sexta</th>
							<th>Sábado</th>
							<th>Domingo</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>09:00 ás :13:00</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Fechado</td>
							<td>Fechado</td>
						</tr>
						<tr>
							<td>14:00 ás :20:00</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Fechado</td>
							<td>Fechado</td>
						</tr>
					</tbody>
				</table>
<!--SCHEDULE TABLE - CURITIBA-->				
				<table class="striped responsive-table" id="tabela-curitiba">
					<thead>
						<tr>
							<th></th>
							<th>Segunda</th>
							<th>Terça</th>
							<th>Quarta</th>
							<th>Quinta</th>
							<th>Sexta</th>
							<th>Sábado</th>
							<th>Domingo</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>08:30 ás :11:30</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Fechado</td>
						</tr>
						<tr>
							<td>13:30 ás :17:30</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Aberto</td>
							<td>Fechado</td>
						</tr>
					</tbody>
				</table>				
			</div>
		</div>
	</section>
<!--FRANCHISES-->
	<section class="units block" id="units">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="standard-title white-text">Unidades</h2>
				<p class="standard-text white-text">Confira todas as nossas unidades. Estamos presentes nas maiores e mais importantes capitais da região sudeste e também da região sul, faça-nos uma visita!</p>
			</div>
		</div>
		<div class="row container">
<!--FRANCHISE - SÃO PAULO-->
			<article class="col s12 l6">
				<div class="card horizontal">
					<div class="card-image card-image-horizontal">
						<img src="img/sp.jpg">
					</div>
					<div class="card-stacke">
						<div class="card-content">
							<h3>São Paulo</h3>
							<p>
								<i class="material-icons left">phone</i>(11) 321-8585<br>
								<i class="material-icons left">email</i>sp@bigtravel.com<br>
								<i class="material-icons left">location_on</i>Rua das Árvores nº 252 centro<br>
							</p>
						</div>						
					</div>
				</div>
			</article>
<!--FRANCHISE - BELO HORIZONTE-->
			<article class="col s12 l6">
				<div class="card horizontal">
					<div class="card-image card-image-horizontal">
						<img src="img/bh.jpg">
					</div>
					<div class="card-stacke">
						<div class="card-content">
							<h3>Belo Horizonte</h3>
							<p>
								<i class="material-icons left">phone</i>(31) 321-9090<br>
								<i class="material-icons left">email</i>bh@bigtravel.com<br>
								<i class="material-icons left">location_on</i>Rua Monte Verde nº 154 centro<br>
							</p>
						</div>						
					</div>
				</div>
			</article>
<!--FRANCHISE - FLORIANÓPOLIS-->
			<article class="col s12 l6">
				<div class="card horizontal">
					<div class="card-image card-image-horizontal">
						<img src="img/floripa.jpg">
					</div>
					<div class="card-stacke">
						<div class="card-content">
							<h3>Florianópolis</h3>
							<p>
								<i class="material-icons left">phone</i>(48) 321-5555<br>
								<i class="material-icons left">email</i>floripa@bigtravel.com<br>
								<i class="material-icons left">location_on</i>Av. Getúlio Vargas nº 2013 centro<br>
							</p>
						</div>						
					</div>
				</div>
			</article>
<!--FRANCHISE - CURITIBA-->
			<article class="col s12 l6">
				<div class="card horizontal">
					<div class="card-image card-image-horizontal">
						<img src="img/curitiba.jpg">
					</div>
					<div class="card-stacke">
						<div class="card-content">
							<h3>Curitiba</h3>
							<p>
								<i class="material-icons left">phone</i>(11) 321-8585<br>
								<i class="material-icons left">email</i>curitba@bigtravel.com<br>
								<i class="material-icons left">location_on</i>Rua XYZ nº 402 centro<br>
							</p>
						</div>						
					</div>
				</div>
			</article>
		</div>		
	</section>	
<!--CONTACT-->
	<section class="contact block" id="contact">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="standard-title">Contato</h2>				
			</div>		
<!--CONTACT - MAPA-->
			<div class="col s12 m6 l4 hide-on-med-only">
				<div class="mapa transparent">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467689.7972359001!2d-46.875497948352624!3d-23.682160377389486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce448183a461d1%3A0x9ba94b08ff335bae!2zU8OjbyBQYXVsbywgU1A!5e0!3m2!1spt-BR!2sbr!4v1644259499178!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
<!--CONTACT - SOCIAL MEDIAS-->		
			<div class="col s12 m6 l4">
				<div class="redes-sociais">
					<h5 class="white-text">Redes Sociais</h5>
					<p class="standard-text white-text">Siga-nos em nossas redes sociais e fique por dentro das nossas promoções.</p>
					<div class="contact-botoes">
						<a href="#" class="btn btn-floating primary-color secondary-color"><i class="fa fa-facebook"></i></a>
						<a href="#" class="btn btn-floating primary-color secondary-color"><i class="fa fa-twitter"></i></a>
						<a href="#" class="btn btn-floating primary-color secondary-color"><i class="fa fa-google"></i></a>
					</div>
					<h5 class="white-text">Endereço</h5>
					<p class="standard-text white-text">Rua das Árvores nº 252, centro São Paulo-SP</p>
					<h5 class="white-text">Contatos</h5>
					<p class="standard-text white-text">
						<i class="material-icons left">phone</i>(11) 321-8585<br>
						<i class="material-icons left">phone</i>(11) 321-9091<br>
						<i class="material-icons left">stay_primary_portrait</i>(11) 98585-2463
					</p>
				</div>
			</div>
<!--CONTACT - CONTACT US-->	
			<div class="col s12 m6 l4">
				<div class="fale-conosco">
					<h5 class="">Fale Conosco</h5>
					<p class="standard-text">Dúvidas, críticas e sugestões!? Entre em contato conosco, seu feedback é muito importante.</p>
					<form method="post" action="mail/send_mail.php">
						<div class="input-field">
							<input type="text" name="name" id="name">
							<label for="name">Seu nome</label>
						</div>
						<div class="input-field">
							<input type="email" name="email" id="email">
							<label for="email">Seu email</label>
						</div>
						<div class="input-field">
							<input type="text" name="subject" id="subject">
							<label for="subject">Assuntos</label>
						</div>
						<div class="input-field">
							<textarea id="message"></textarea>
							<label for="message">Mensagem</label>
						</div>
						<button class="btn primary-color secondary-color" type="submit">Enviar</button>					
					</form>
				</div>
			</div>
		</div>
	</section>
<!--STATEMENTS-->
	<div class="statements primary-color">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="standard-title white-text">Depoimentos</h2>
			</div>
<!--STATEMENTS - NUMBER 1-->
			<div class="col s12 m4 center">
				<img src="img/customer_one.jpg" class="circle responsive-image">
				<p class="white-text light">Escelente atendimento, são rápidos e eficientes, sem contar com o excelente suporte antes e durante a viagem.</p>
				<h5 class="white-text">Paulo Amaral</h5>
				<p class="white-text">
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
				</p>
			</div>
<!--STATEMENTS - NUMBER 2-->
			<div class="col s12 m4 center">
				<img src="img/customer_two.jpg" class="circle responsive-image">
				<p class="white-text light">Atendimento, preço e facilidade de pagamento, não poderia pedir mais nada, excelente viajar com a Bigtravel, super recomendo!</p>
				<h5 class="white-text">Camila Silva</h5>
				<p class="white-text">
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
				</p>
			</div>
<!--STATEMENTS - NUMBER 3-->
			<div class="col s12 m4 center">
				<img src="img/customer_three.jpg" class="circle responsive-image">
				<p class="white-text light">Viajar com a Bigtravel é marivilhoso do início ao fim, só quem viaja sabe do que estou falando, pessoal nota 1000.</p>
				<h5 class="white-text">Sergio Magno</h5>
				<p class="white-text">
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
				</p>
			</div>
		</div>
	</div>
<!--FOOTER SECTION-->
	<footer class="footer">
		<div class="row container">
			<div class="col s12 center">
				<img src="img/logo.svg">
				<p>Agência de Turismo 2018 - Todos os direitos reservados</p>
			</div>
		</div>		
	</footer>
<!--JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--MATERIALIZE JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--CODE JS-->
	<script>
		$(document).ready(function(){
		//CAROUSEL
			$(".carousel.carousel-slider").carousel({
				fullWidth: true,
				indicators: true
			});
		//AUTOPLAY CAROUSEL
			function autoplay(){
				$(".carousel").carousel("next");
				setTimeout(autoplay,4500);
			}
			autoplay();
		//SIDENAV
			$(".sidenav").sidenav();
		//IMAGE ZOOM EFFECT
			$(".materialboxed").materialbox();
		//MODAL
			$(".modal").modal();
		//TABLE
			$("ul.tabs").tabs();
		});
		//MENU COLOR
		$(window).on("scroll",function(){
			if($(window).scrollTop()>100){
				$(".navbar").addClass("nav-color");
			}else{
				$(".navbar").removeClass("nav-color");
			}
		});
	</script>
</body>
</html>
