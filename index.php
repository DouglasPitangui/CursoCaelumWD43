<!DOCTYPE html>
<html>
    <body>
		<?php include("cabecalho.php"); ?>
        <div class="container destaque">
            <section class="busca">
                <h2>
                    Busca
                </h2>
                <form action="http://www.google.com.br/search" id="form-busca">
                    <input type="search" name="q" id="q">
                    <input type="image" src="img/busca.png">
                </form>
            </section>
            <!-- fim .busca -->
            <section class="menu-departamentos">
                <h2>
                    Departamentos
                </h2>
                <nav>
                    <ul>
                        <li><a href="#">Blusas e Camisas</a>
							<ul>
								<li><a href="#">Manga curta</a></li>
								<li><a href="#">Manga comprida</a></li>
								<li><a href="#">Camisa social</a></li>
								<li><a href="#">Camisa casual</a></li>
							</ul>
						</li>
						<li><a href="#">Calças</a></li>
						<li><a href="#">Saias</a></li>
						<li><a href="#">Vestidos</a></li>
						<li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </nav>
            </section>
            <!-- fim .menu-departamentos -->
            <img src="img/thaianypitangui.png" alt="Promoção: Big City Night">
			<a href="#" class="pause"></a>
        </div>
        <!-- fim .container .destaque -->
		<div class="container paineis">
		<!--****************************************************************-->
		<!-- ***************produtos novos********************** -->
		<!--****************************************************************-->
			<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
			<!-- primeiro produto -->
				<li>
					<a href="produto.php">
						<figure id="teste">
							<img src="img/produtos/miniatura1.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura2.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura3.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura4.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura5.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura6.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
			</ol>
			</section>
			<!--****************************************************************-->
			<!-- ***************produtos mais vendidos********************** -->
			<!--****************************************************************-->
			<section class="painel mais-vendidos">
			<h2>Mais vendidos</h2>
			<ol>
			<!-- primeiro produto -->
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura1.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura2.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura3.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura4.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura5.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
				<li>
					<a href="produto.html">
						<figure>
							<img src="img/produtos/miniatura6.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!-- coloque mais produtos aqui! -->
			</ol>
			</section>
			
			</div>

		<?php include("rodape.php"); ?>
			
   </body>
   <script src="js/home.js"></script>

</html>