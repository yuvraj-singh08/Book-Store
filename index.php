<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>

<body>
    <header>
       <div class="head">
           <div class="navbar">
               <span class="navbar_left">
                   <ul>
                       <li><a href="#">HOME</a></li>
                       <li> <a href="#">ABOUT US</a></li>
                       <li><a href="#">TERMS</a></li>
                       <li><a href="#">ABC</a></li>
                    </ul>
                </span>
                <span class="navbar_right">
                    <button class="btn">WISH LIST</button><button class="btn">LOGIN</button>
                </span>
            </div>
            <div class="midheader">
                <span class="header_left"><span class="sys">SYS</span> <span class="books">BOOK$</span></span>
                <span class="search">
                    <form action="search.php" method="POST">
                        <input class="input" type="text" name="text" placeholder="Search here!">
                        <input class="btn" type="submit" name="submit" class="submit" value="Search">
                    </form>
                </span>
                <span class="header_right">
                    <ul>
                        <li> <a href="#">BOOKS</a></li>
                        <li> <a href="#">RENT BOOKS</a></li>
                        <li> <a href="#">SELL BOOKS</a></li>
                    </ul>
                </span>
            </div>
        </div>
    </header>
        <!-- <div class="mid">
            <div class="box">
                <img class="img1" src="DBMS.png" alt="">
                <img class="img2" src="DS.png" alt="">
                <img class="img3" src="JAVA.png" alt="">
                <img class="img3" src="C++.png" alt="">
                <img class="img3" src="C++design.png" alt="">
                <img class="img3" src="PYTHON.png" alt="">
            </div>
        </div> -->
    <section class="main">
    
    <div class="columns">
      <ul class="price">
        <li class="header" style="background-color:#04AA6D">DBMS</li>
        <li class="img1"><img src="DBMS.png" alt=""></li>
        <li class="grey"><a href="#" class="button">$1000</a></li>
      </ul>
    </div>
    
    <div class="columns">
      <ul class="price">
        <li class="header" style="background-color:#04AA6D">DATA SCIENCE</li>
        <li class="img2"><img src="DS.png" alt=""></li>
        <li class="grey"><a href="#" class="button">$999</a></li>
      </ul>
    </div>
    
    <div class="columns">
      <ul class="price">
        <li class="header" style="background-color:#04AA6D">JAVA</li>
        <li class="img3"><img src="JAVA.png" alt=""></li>
        <li class="grey"><a href="#" class="button">$899</a></li>
      </ul>
    </div>
    <div class="columns">
        <ul class="price">
          <li class="header" style="background-color:#04AA6D">DBMS</li>
          <li class="img1"><img src="PYTHON.png" alt=""></li>
          <li class="grey"><a href="#" class="button">$1000</a></li>
        </ul>
      </div>
      
      <!-- <div class="columns">
        <ul class="price">
          <li class="header" style="background-color:#04AA6D">DATA SCIENCE</li>
          <li class="img2"><img src="C++.png" alt=""></li>
          <li class="grey"><a href="#" class="button">$999</a></li>
        </ul>
      </div>
      
      <div class="columns">
        <ul class="price">
          <li class="header" style="background-color:#04AA6D">JAVA</li>
          <li class="img3"><img src="C++design.png" alt=""></li>
          <li class="grey"><a href="#" class="button">$899</a></li>
        </ul>
      </div> -->
</section>
    <footer></footer>
       
</body>
</html>