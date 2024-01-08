<!DOCTYPE html>
<html>
<head>
	<title>Burger Code</title>
	<meta charset="utf-8">
	<meta name= "viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container site">
		<h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span> </h1>

		<nav>
			<ul class="nav nav-pills">
				<li role ="presentation" class="active"><a href="#1" data-toggle="tab">Menus</a></li>
				<li role ="presentation" ><a href="#2" data-toggle="tab">Burgers</a></li>
				<li role ="presentation" ><a href="#3" data-toggle="tab">Snacks</a></li>
				<li role ="presentation" ><a href="#4" data-toggle="tab">Salades</a></li>
				<li role ="presentation" ><a href="#5" data-toggle="tab">Boissons</a></li>
				<li role ="presentation" ><a href="#6" data-toggle="tab">Desserts</a></li>
			</ul>
		</nav>
		<div class="tab-content">
			<div class="tab-pane active" id="1">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m1.png" alt="...">
							<div class="price">8.90 €</div>
							<div class="caption">
								<h4>Menu Classic</h4>
								<p>Sandwich: Burger, Salade, Tomate, Cornichon + Frites + Boisson </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m2.png" alt="...">
							<div class="price">9.50 €</div>
							<div class="caption">
								<h4>Menu Bacon</h4>
								<p>Sandwich: Burger,Fromage, bacon,  Salade, Tomate + Frites + Boisson </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m3.png" alt="...">
							<div class="price">10.90 €</div>
							<div class="caption">
								<h4>Menu Big</h4>
								<p>Sandwich: Double Burger, fromage Salade , Cornichon + Frites + Boisson </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m4.png" alt="...">
							<div class="price">9.90 €</div>
							<div class="caption">
								<h4>Menu Chicken</h4>
								<p>Sandwich: poulet frit, Tomate, Frites + Boisson </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m5.png" alt="...">
							<div class="price">10.90 €</div>
							<div class="caption">
								<h4>Menu Fish</h4>
								<p>Sandwich: Poisson, Salade, Moyonnaise, Cornichon + Frites + Boisson </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/m6.png" alt="...">
							<div class="price">11.90 €</div>
							<div class="caption">
								<h4>Menu Double Steak</h4>
								<p>Sandwich: Double Burger, fromage, bacon, Salade, Tomate + Frites + Boisson </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>


			<div class="tab-pane" id="2">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b1.png" alt="...">
							<div class="price">5.90 €</div>
							<div class="caption">
								<h4>Classic</h4>
								<p>Sandwich: Burger, Salade, Tomate, Cornichon </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b2.png" alt="...">
							<div class="price">6.50 €</div>
							<div class="caption">
								<h4>Bacon</h4>
								<p>Sandwich: Burger, fromage, bacon, salade, Tomate </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b3.png" alt="...">
							<div class="price">6.90 €</div>
							<div class="caption">
								<h4>Big</h4>
								<p>Sandwich: double Burger, fromage, Cornichon, salade </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b4.png" alt="...">
							<div class="price">5.90 €</div>
							<div class="caption">
								<h4>Chicken</h4>
								<p>Sandwich: poulet frit, Tomate, salade, mayonnaise </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b5.png" alt="...">
							<div class="price">6.50 €</div>
							<div class="caption">
								<h4>Fish</h4>
								<p>Sandwich: Poissons pane, Salade, mayonnaise Cornichon </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/b6.png" alt="...">
							<div class="price">7.50 €</div>
							<div class="caption">
								<h4>Double steak</h4>
								<p>Sandwich: double Burger, bacon, Salade, Tomate</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="tab-pane " id="3">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/s1.png" alt="...">
							<div class="price">3.90 €</div>
							<div class="caption">
								<h4>Frites</h4>
								<p>Pomme de terre frites </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/s2.png" alt="...">
							<div class="price">3.40 €</div>
							<div class="caption">
								<h4>Onion Rings</h4>
								<p>Rondelles d'onion frits </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/s3.png" alt="...">
							<div class="price">5.90 €</div>
							<div class="caption">
								<h4>Nuggets</h4>
								<p>Nuffets de poulet frits </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/s4.png" alt="...">
							<div class="price">3.50 €</div>
							<div class="caption">
								<h4>Nuggets Fromage</h4>
								<p>Nuggets de fromage frits </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/s5.png" alt="...">
							<div class="price">5.90 €</div>
							<div class="caption">
								<h4>Ailes de Poulet</h4>
								<p>Ailes de poulet barbecue </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="tab-pane " id="4">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/sa1.png" alt="...">
							<div class="price">8.90 €</div>
							<div class="caption">
								<h4>Cesar Poulet Pane</h4>
								<p>Poulet pane, salade, tomate et la fameuse sauce cesar</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/sa2.png" alt="...">
							<div class="price">8.90 €</div>
							<div class="caption">
								<h4>Cesar Poulet Grille</h4>
								<p>Poulet grille, salade, tomate et la fameuse sauce cesar </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/sa3.png" alt="...">
							<div class="price">5.90 €</div>
							<div class="caption">
								<h4>Salade Light</h4>
								<p>salade, tomate, concombre, mais et vinaigre balsamique</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/sa4.png" alt="...">
							<div class="price">7.90 €</div>
							<div class="caption">
								<h4>Poulet Pane</h4>
								<p>Poulet pane, salade, tomate et la sauce de votre choix </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/sa5.png" alt="...">
							<div class="price">7.90 €</div>
							<div class="caption">
								<h4>Poulet Grille</h4>
								<p>Poulet grille, salade, tomate et la sauce de votre choix</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="tab-pane " id="5">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo1.png" alt="...">
							<div class="price">1.90 €</div>
							<div class="caption">
								<h4>Coca-Cola</h4>
								<p>au choix: petit, moyen ou grand</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo2.png" alt="...">
							<div class="price">1.90 €</div>
							<div class="caption">
								<h4>Coca-Cola Light</h4>
								<p>au choix: petit, moyen ou grand </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo3.png" alt="...">
							<div class="price">1.90 €</div>
							<div class="caption">
								<h4>Coca-Cola Zero</h4>
								<p>au choix: petit, moyen ou grand </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo4.png" alt="...">
							<div class="price">1.90 €</div>
							<div class="caption">
								<h4>Fanta</h4>
								<p>au choix: petit, moyen ou grand</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo5.png" alt="...">
							<div class="price">1.90 €</div>
							<div class="caption">
								<h4>Sprite</h4>
								<p>au choix: petit, moyen ou grand </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/bo6.png" alt="...">
							<div class="price">1.90 €</div>
							<div class="caption">
								<h4>Nestea</h4>
								<p>au choix: petit, moyen ou grand</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>


			<div class="tab-pane " id="6">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/d1.png" alt="...">
							<div class="price">4.90 €</div>
							<div class="caption">
								<h4>Fondant au Chocolat</h4>
								<p>au chocolat blanc ou au lait </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/d2.png" alt="...">
							<div class="price">2.90 €</div>
							<div class="caption">
								<h4>Muttin</h4>
								<p>au choix: au fruits ou au chocolat </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/d3.png" alt="...">
							<div class="price">2.90 €</div>
							<div class="caption">
								<h4>Beignet</h4>
								<p>au choix: au chocolat ou a la vanille</p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/d4.png" alt="...">
							<div class="price">3.90 €</div>
							<div class="caption">
								<h4>Milkhake</h4>
								<p>au choix: fraise, vanile ou chocolat </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="images/d5.png" alt="...">
							<div class="price">4.90 €</div>
							<div class="caption">
								<h4>Sundae</h4>
								<p>au choix: fraise, caramel ou chocolat </p>
								<a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
	</div>

</body>
</html>