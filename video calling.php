<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI CHATROOM - Video Calling Web Application</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Poppins:wght@400;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
	<script type="text/javascript" src="script.js"></script>
    <script>
        function toggleSearch() {
            let searchBar = document.getElementById('searchBar');
            searchBar.classList.toggle('active');
        }
    </script>
</head>
<body>
    <header>
        <div class="container">
            <a href="" id="logo"><img src="logo1.png" width="50px" height="50px" id=logo1 alt="Logo image"> SI CHATROOM</a>
            <nav id="mainMenu">
                <a href="index.php"><i class="fa fa-home"></i> Home</a>
                <a href="calling mode.php" class="active"><i class="fa fa-video-camera"></i> Calling modes</a>
            </nav>
        </div>
    </header>
    
    <div class="content">
		<video class="from" id="localVideo" autoplay controls></video> 
		<video class="to" id="remoteVideo" autoplay controls></video>
    </div> 

    <div class="content2">        
    <a href="index.php"><button class="btn"><i class="fa fa-phone"></i> End Call</button></a>
    </div>

    <footer>
        <div class="container">
            <div class="flexRow">
                SI_chatroom &copy; 2023 - All Rights Reserved
                <nav>
                    <a href="" class="facebook"><i class="fa fa-facebook" style="font-size:28px"></i></a>
                    <a href="" class="twitter"><i class="fa fa-twitter" style="font-size:28px"></i></a>
                    <a href="" class="linkedin"><i class="fa fa-linkedin" style="font-size:28px"></i></a>
                    <a href="" class="instagram"><i class="fa fa-instagram" style="font-size:28px"></i></a>
                </nav>
            </div>
        </div>
    </footer>
</body>
</html>