
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <header class="header">
     <div class="menu container">
        <a href="#" class="logo">Tacos</a> 
        <input type="checkbox" id="menu"/>
        <label for="menu">
        <img src="imagenes/menu.png" class="menu-icono" alt="">
        </label>
        <nav class="navbar">
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Menu</a></li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: red;"><i class="fas fa-shopping-cart"></i> Mi carrito</a>
              </li>
           
         </ul>
        </nav>
     </div>

     <div class="header-content container">
        <div class="header-txt">
            <h1>¿Un <br> <spa>taco?</spa></h1>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Delectus tenetur enim, dolore quia voluptatum molestiae 
                quisquam soluta esse odit a unde facilis ex quis doloribus
                 iure sequi neque, quidem impedit?
            </p>
            <div class="buttons">
            <a href="#" class="btn-1"> Ordenar Ahora</a>
            <a href="#" class="btn-1">Ver menu</a>

            </div>
        </div>
         <div class="header-img">
              <img src="imagenes/857681.png" alt="">
         </div>
     </div>
    </header>
    
    <section class="menu-pl container">
        <h2>Nuestro Mejor <span> menu </span></h2>
        <div class="general-content">
        <div class="general-txt">
            <img src="imagenes/1.jpg" alt="">
            <h3>Taco de Pastor</h3>
            <p>
                ihihihihiihihihihihihih
            </p>
            <div class="prices">
                <span>$15.00</span>
                 <a href="" class="btn-2">Comprar</a>
            </div>

        </div>
        <div class="general-txt">
            <form id="formulario" name="formulario" method="post" action="cart.php">
                <input name="precio" type="hidden" id="precio" value="10" />
                <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
            <img src="imagenes/2.jpg" alt="">
            <div class="card-body">
                <h3>Producto 1</h3>
                <div class="prices">
                <p class="card-text">Descripción - Precio 10€</p>
                <button class="btn-2" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
            </div>
            </div>
            </div>
        </div>
        </div>

    </section>

    <section class="about">
        <div class="about-content container">
            <div class="about-txt">
                <h2>Oferta especial <br><span>para ti</span></h2>
                <p>
                    uhuhuhuhuhuhihuhiuhui
                </p>
                <div class="hamburger">
                    <span>$25</span>
                    <a href="#" class="btn-2">Ordenar ahora</a>

                </div>
            </div>
            <div class="about-img">
                <img src="imagenes/10.jpg" alt="">
            </div>

        </div>
    </section>

        
    <section class="menu-pl container">
        <h2>Nuestro <span> menu </span></h2>
        <div class="general-content">
        <div class="general-txt">
            <img src="imagenes/1.jpg" alt="">
            <h3>Taco de Pastor</h3>
            <p>
                ihihihihiihihihihihihih
            </p>
            <div class="prices">
                <span>$15.00</span>
                 <a href="" class="btn-2">Comprar</a>
            </div>

        </div>
        <div class="general-txt">
            <img src="imagenes/2.jpg" alt="">
            <h3>Taco de Suadero</h3>
            <p>
                ihihihihiihihihihihihih
            </p>
            <div class="prices">
                <span>$15.00</span>
                 <a href="" class="btn-2">Comprar</a>
            </div>
        </div>
        <div class="general-txt">
            <img src="imagenes/3.jpg" alt="">
            <h3>Taco de Suadero</h3>
            <p>
                ihihihihiihihihihihihih
            </p>
            <div class="prices">
                <span>$15.00</span>
                 <a href="" class="btn-2">Comprar</a>
            </div>
        </div>
        <div class="general-txt">
            <img src="imagenes/4.jpg" alt="">
            <h3>Taco de Suadero</h3>
            <p>
                ihihihihiihihihihihihih
            </p>
            <div class="prices">
                <span>$15.00</span>
                 <a href="" class="btn-2">Comprar</a>
            </div>
        </div>
        <div class="general-txt">
            <img src="imagenes/5.webp" alt="">
            <h3>Taco de Suadero</h3>
            <p>
                ihihihihiihihihihihihih
            </p>
            <div class="prices">
                <span>$15.00</span>
                 <a href="" class="btn-2">Comprar</a>
            </div>
        </div>
        <div class="general-txt">
            <img src="imagenes/7.webp" alt="">
            <h3>Taco de Suadero</h3>
            <p>
                ihihihihiihihihihihihih
            </p>
            <div class="prices">
                <span>$15.00</span>
                 <a href="" class="btn-2">Comprar</a>
            </div>
        </div>
        <div class="general-txt">
            <img src="imagenes/9.webp" alt="">
            <h3>Taco de Suadero</h3>
            <p>
                ihihihihiihihihihihihih
            </p>
            <div class="prices">
                <span>$15.00</span>
                 <a href="" class="btn-2">Comprar</a>
            </div>
        </div>
        </div>
 </section>
 
 
 <section class="info container">
    <div class="info-img">
        <img src="imagenes/10.JPG" alt="">
    </div>
       <div class="info-txt">
        <h2>Sobre <span>Nosotros</span></h2>
        <p>dokcowdwokcowkcokwokcow</p>
        <a href="#"class="btn-1">Informacion</a>
       </div>
 </section>

 <footer class="footer">
 <div class="footer-content container">
    <div class="link">
        <h3>lorem</h3>
        <ul>
            <li><a href="#">lorem</a></li>
        </ul>
    </div>
    <div class="link">
        <h3>lorem</h3>
        <ul>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
        </ul>
    </div>
    <div class="link">
        <h3>lorem</h3>
        <ul>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
        </ul>
    </div>
    <div class="link">
        <h3>lorem</h3>
        <ul>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
            <li><a href="#">lorem</a></li>
        </ul>
    </div>
 </div>
 </footer>
 
 
</body>
</html>
