<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YGODUELIST INA : Home</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<div id="modal" >
    <div class="container animate">
        <div class="upper">
        <span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">&times;</span>

        </div>
        <div class="login" class="modal-content animate">
        <form action="" method="post">
      
        <label for="uname" id="">Username</label><br>
        <input type="text" name="" id="uname" placeholder="Username">
        <br>
        <label for="pw">Password</label><br>
        <input type="text" name="" id="pw" placeholder="Password"><br>
        <input type="submit" value="Login" class="inputLogin">
    </form>
        </div>
    </div>
</div>
<script>
    var nod = document.getElementById('modal');
    window.onclick= function(event) {
    if (event.target == nod) {
        nod.style.display = "none";
    }
}
</script>
<div class="left"><img src="right.png" alt=""></div>
<div class="right"><img src="left.png" alt=""></div>
    <div class="container">
        <nav>
            <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/article">Artikel</a></li>
            <li><a href="/deck-page">Deck</a></li>
            <li><a href="/forum-and-faq">Forum</a></li>
            <li><button class='tombol' onclick="document.getElementById('modal').style.display='block'"> Login</button></li>
            </ul>
        </nav>
        
        <main>
           <div class="top">
               <div class="topText">
               <h1><a href="">YGODUELIST INDONESIA</a></h2>
               </div>  
           </div>
            
        <div class="artikel">
        <h2 id='pagename'>Featured</h2>
        
            <section>
               <?php 
                for ($i=0; $i < 3; $i++) { 
                    # code...
                    $postingan;
                    switch ($i) {
                        case 0:
                            $postingan = 'Artikel';
                            break;
                            case 1:
                                $postingan = 'Deck';
                                break;
                                case 2:
                                    $postingan = 'Update';
                                    break;
                        default:
                            # code...
                            break;
                    }
                ?>
                <br><br><br><br>
              <div class="genre">  <?php echo "<a href=''><h3 id='genre'>$postingan Minggu Ini</h3></a>"; ?></div>
             
                <br>
                <br>
                
                <tr>
                <?php 
                for ($j=0; $j < 2; $j++) { 
                    # code...
                    $k=$j+1;
                    $l=$j+3;
                ?>
                <div class="kotak">
                <div class="blok">
                    <td>
                        <a href="/article"><?php echo "<img src='$postingan/$k.png' alt='img artikel' class='artikelImg'>"; ?></a>
                        <a href="/article"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat.</p></a>
                    </td>
                    
                </div>
                <div class="blok">
                    <td>
                        <a href="/deck-page"><?php echo "<img src='$postingan/$l.png' alt='img artikel' class='artikelImg'>"; ?></a>
                        <a href="/deck-page"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat.</p></a>
                    </td>
                    
                </div>
                </div>
                
                    
                    <?php }  ?>
                </tr>
                
                
                <?php }  ?>
               
            </section>
        </div>
       <br>
        <div class="page">
            <a href=""><p>1</p></a>
            <a href=""><p>2</p></a>
            <a href=""><p>3</p></a>
        </div>
        </main>
        <br>
        <footer>
            <p>copyright here</p>
            <a href=""><img src="" alt="instagram"></a>
            <a href=""><img src="" alt="email"></a>
            <a href=""><img src="" alt="twitter"></a>
            <a href=""><img src="" alt="apa kek"></a>
        </footer>
    </div>
    
       
</body>
</html>