<html>
	<head>
		<meta charset="utf-8" />
		<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no"/>		
		<title>Portal Noticias</title>
		<link rel="stylesheet" href="assets/css/style13.css">
		<script type="text/javascript" src="assets/js/script.js"></script>
	</head>
	<body> 
		<div class="topo">
			<div class="topoint">
				<div class="topoleft">
					<ul> 
						<li><a href="./" class="ativo">Home</a></li>
						<li><a href="quem-somos">Quem Somos</a></li>
						<li><a href="anuncia-aqui">Anuncie Aqui</a></li>
						<li><a href="contato">Contato</a></li>
					<ul/>
				</div>
				<div class="toporight">
					<input type="image" src="assets/images/busca.png" border="0" width="26" height="26" />
					<input type="text" name="busca" class="topobusca" placeholder="Busca..." /> 
					<a href=""><img src="assets/images/youtube.png" border="0" width="26" height="26"/></a>
					<a href=""><img src="assets/images/twitter.png" border="0" width="26" height="26"/></a>
					<a href=""><img src="assets/images/face.png" border="0" width="26" height="26"/></a>
					<a href=""><img src="assets/images/googleplus.png" border="0" width="26" height="26"/></a>
					<a href=""><img src="assets/images/rss.png" border="0" width="26" height="26"/></a>
				</div>
			</div>
		</div>
		
		<div class="topodois"> 
			<div class="topodoisint"> 
				<div class="logo"> 
					<img src="assets/images/logo.png" border="0" width="230"/>
				</div>
				<div class="banner"> PUBLICIDADE 780X920px </div>
			</div>
		</div>
		<div class="menu">
			<div class="menuint"> 
				<img src="assets/images/menu.png" border="0" width="40" heigth="40" class="menumobile"
				onclick="toggleMenu()"/>
				<ul id="menu"> 
					<li><a href="./" class="ativo">Home</a></li>
					<li><a href="economia">Economia</a></li>
					<li>
						<a href="entreterimento">Entreterimento</a>
						<img src="assets/images/arrowdown.png" border="0" width="10" />
						<div class="submenu"> 
							<a href="Musica"><div class="submenuitem">Musica</div></a>
							<a href="Teatro"><div class="submenuitem">Teatro</div></a>
							<a href="Lazer"><div class="submenuitem">Lazer</div></a>
							<a href="Cinema"><div class="submenuitem">Cinema</div></a>
							<a href="Shows"><div class="submenuitem">Shows</div></a>
						</div>
					</li>
					<li>
						<a href="esportes">Esportes</a>
						<img src="assets/images/arrowdown.png" border="0" width="10" />
						<div class="submenu"> 
							<a href="Futebol"><div class="submenuitem">Futebol</div></a>
							<a href="Volei"><div class="submenuitem">Volei</div></a>
							<a href="Basketball"><div class="submenuitem">Basketball</div></a>
						</div>
					</li>
					<li><a href="geral">Geral</a></li>
					<li>
						<a href="noticias">Notícias</a>
						<img src="assets/images/arrowdown.png" border="0" width="10" />
						<div class="submenu"> 
							<a href="Financas"><div class="submenuitem">Finanças</div></a>
							<a href="Economia"><div class="submenuitem">Economia</div></a>
						</div>
					</li>
					<li><a href="policia">Polícica</a></li>
					<li><a href="videos">Videos</a></li>
				</ul>
			</div>
		</div>
		<div class ="ultimasnoticias"> 
			<div class="ultimasnoticiasint">
				<div class="ultnoticiasarea"> 
					<div class="ultnoticiastitulo"> ÚLTIMAS NOTÍCIAS</div>
					<div class="ultnoticiasnoticia">Alguma notícia qualquer sobre o mundo!!!</div>	
				</div>	
			</div>
		</div>	
		<div class="container">
			<div class="containerint">
				<div class="leftside">
					<div class="slideshow" id="slideshow">
						<div class="slidebolinhas"> 
							<div class="bolinha" onclick="mudarSlide(0)"></div>
							<div class="bolinha" onclick="mudarSlide(1)"></div>
							<div class="bolinha" onclick="mudarSlide(2)"></div>
							<div class="bolinha" onclick="mudarSlide(3)"></div>
						</div>
						<div class="slideshowarea">
							<a href="http://www.google.com.br">
							<div class="slide" style="background-image:url(
							'http://www.google.com.br/google.jpg')">
								<div class="slideinfo"> 
									<div class="slideinfo_titulo">Titulo de teste 1</div>
									<div class="slideinfo_subtitulo"> Subtitulo de teste</div>
								</div>							
							</div>
							</a>
							<a href="http://www.google.com.br">
							<div class="slide" style="background-image:url(
							'http://www.google.com.br/google.jpg')">
								<div class="slideinfo"> 
									<div class="slideinfo_titulo">Titulo de teste 2</div>
									<div class="slideinfo_subtitulo"> Subtitulo de teste</div>
								</div>							
							</div>
							</a>
							<a href="http://www.google.com.br">
							<div class="slide" style="background-image:url(
							'http://www.google.com.br/google.jpg')">
								<div class="slideinfo"> 
									<div class="slideinfo_titulo">Titulo de teste 3</div>
									<div class="slideinfo_subtitulo"> Subtitulo de teste</div>
								</div>							
							</div>
							</a>
							<a href="http://www.google.com.br">
							<div class="slide" style="background-image:url(
							'http://www.google.com.br/google.jpg')">
								<div class="slideinfo"> 
									<div class="slideinfo_titulo">Titulo de teste 4</div>
									<div class="slideinfo_subtitulo"> Subtitulo de teste</div>
								</div>							
							</div>	
							</a>																			
						</div>
					</div>

					<div class="widget">
						<div class="widget_titulo">NOTÍCIAS	</div>
							<div class="widget_conteudo"> 
								<div class="noticiaarea1"> 
								<div class="noticiaitem noticiabig">
									<div class="noticiaimg">
										<img src="" border="0" width="80" height="80">
									</div>
									<div class="noticiatitulo">Algum título Qualquer Algum título Qualquer
									Algum título Qualquer Algum título</div>
									<div class="noticiainfo"> 500 coments </div>
									</div>
								</div>
								<div class="noticiaarea2"> 
									<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80" height="80">
									</div>
									<div class="noticiatitulo">Algum título</div>
									<div class="noticiainfo"> 500 coments </div>
									</div>
									<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80" height="80">
									</div>
									<div class="noticiatitulo">Algum título</div>
									<div class="noticiainfo"> 500 coments </div>
									</div>
									<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80" height="80">
									</div>
									<div class="noticiatitulo">Algum título</div>
									<div class="noticiainfo"> 500 coments </div>
									</div>
									<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80" height="80">
									</div>
									<div class="noticiatitulo">Algum título</div>
									<div class="noticiainfo"> 500 coments </div>
									</div>
								</div>	
								<div style="clear:both"></div>					
							</div>
					</div>
					<div class="widget">
						<div class="widget_titulo">ESPORTES </div>
							<div class="widget_conteudo"> 
								<div class="noticiaarea1"> 
								<div class="noticiaitem noticiabig">
									<div class="noticiaimg">
										<img src="" border="0" width="80" height="80">
									</div>
									<div class="noticiatitulo">Algum título Qualquer Algum título Qualquer
									Algum título Qualquer Algum título</div>
									<div class="noticiainfo"> 500 coments </div>
									</div>
								</div>
								<div class="noticiaarea2"> 
									<a href="http://www.google.com.br">
									<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80" height="80">
									</div>
									<div class="noticiatitulo">Algum título</div>
									<div class="noticiainfo"> 500 coments </div>
									</div>  </a>							
									<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80" height="80">
									</div>
									<div class="noticiatitulo">Algum título</div>
									<div class="noticiainfo"> 500 coments </div>
									</div>
									<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80" height="80">
									</div>
									<div class="noticiatitulo">Algum título</div>
									<div class="noticiainfo"> 500 coments </div>
									</div>
									<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80" height="80">
									</div>
									<div class="noticiatitulo">Algum título</div>
									<div class="noticiainfo"> 500 coments </div>
									</div>
								</div>	
								<div style="clear:both"></div>					
							</div>
					</div>


				</div>
				<div class="rightside">
					<div class="widget">
						<div class="widget_titulo">SOCIAL</div>
						<div class="widget_conteudo"> 
					<a href="https://google.com.br/"><img src="assets/images/rss.png" border="0" width="24" height="24"/></a>	
					<a href="https://aboutme.google.com/u/0/?referer=gplus"><img src="assets/images/googleplus.png" border="0" width="24" height="24"/></a>
					<a href="https://www.facebook.com/"><img src="assets/images/face.png" border="0" width="24" height="24"/></a>
					<a href="https://twitter.com/login?lang=pt"><img src="assets/images/twitter.png" border="0" width="24" height="24"/></a>
					<a href="https://www.youtube.com/"><img src="assets/images/youtube.png" border="0" width="24" height="24"/></a>
						</div>
					</div>
					<div class="widget">
						<div class="widget_titulo">ÚLTIMAS NOTÍCIAS</div>
						<div class="widget_conteudo"> 
							<div class="noticia_item">
								<a href="./"> Título da notícia para que fique com pelo menos
								2 duas e eu possa exemplificar. </a>
							</div>
							<div class="noticia_item">
								<a href="./"> Título da notícia para que fique com pelo menos
								2 duas e eu possa exemplificar. </a>
							</div>
							<div class="noticia_item">
								<a href="./"> Título da notícia para que fique com pelo menos
								2 duas e eu possa exemplificar. </a>
							</div>
							<div class="noticia_item">
								<a href="./"> Título da notícia para que fique com pelo menos
								2 duas e eu possa exemplificar. </a>
							</div>
							<div class="noticia_item_ult">
								<a href="./"> Título da notícia para que fique com pelo menos
								2 duas e eu possa exemplificar. </a>
							</div>
						 </div>
					</div>
					<div class="widget">
						<div class="widget_titulo">PUBLICIDADE</div>
						<div class="widget_conteudo">  
							<img src="assets/images/banner.jpg" border="0" width="270"/>
						</div>
					</div>
						<div class="widget">
						<div class="widget_titulo">ENCONTRE-NOS NO FACEBOOK</div>
						<div class="widget_conteudo">
							<iframe src="https://www.facebook.com/plugins/page.php?
							href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&
							width=272&height=121&small_header=true&adapt_container_width=true
							&hide_cover=false&show_facepile=true&appId" width="272" height="121" 
							style="border:none;overflow:hidden" scrolling="no" frameborder="0" 
							allowTransparency="true" allow="encrypted-media"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
