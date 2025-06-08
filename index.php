<?php

if(isset($_POST['txtName']))

{

$con = mysqli_connect('localhost', 'root', '','si_chatroom');

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];

$sql = "INSERT INTO `connect_now` (`Id`, `NAME`, `EMAIL`, `PHONE`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone')";

$rs = mysqli_query($con, $sql);

}

?>

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
                <a href="index.php" class="active"><i class="fa fa-home"></i> Home</a>
                <a href="calling mode.php"><i class="fa fa-video-camera"></i> Calling modes</a>
            </nav>
        </div>
    </header>

    <section id="banner">
        <div class="container">
            <aside>
                <h1>Improve Your Communication experience at SI CHATROOM</h1>
                <p>A unified platform for Team Phone, Video Meetings, and more. Best Screen Sharing Tool. Your Favorite Meeting App. Smart Collaboration Tools. Hybrid Work Made Easy. Connect Anytime, Anywhere!!!!!</p>
                <form action="" id="searchBar" data-info="Find caller id">
                    <input type="text" placeholder="Search name..." />
                    <button type="button" onclick="toggleSearch()">
                        <svg class="search" version="1.1" viewBox="0 0 32 32"><circle cx="14" cy="14" fill="none" id="XMLID_42_" r="9" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" id="XMLID_44_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="27" x2="20.366" y1="27" y2="20.366"/></svg>
                        <svg class="close" viewBox="0 0 32 32"><g data-name="Layer 2" id="Layer_2"><path fill="#fff" d="M4,29a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l24-24a1,1,0,1,1,1.42,1.42l-24,24A1,1,0,0,1,4,29Z"/><path fill="#fff" d="M28,29a1,1,0,0,1-.71-.29l-24-24A1,1,0,0,1,4.71,3.29l24,24a1,1,0,0,1,0,1.42A1,1,0,0,1,28,29Z"/></g><g id="frame"><rect fill="none" height="32" width="32"/></g></svg>
                    </button>
                </form>
            </aside>
            <img src="https://cdn-icons-png.flaticon.com/512/4542/4542150.png" alt="SI CHATROOM" />
        </div>
    </section>

    <section id="enroll">
        <div class="container">
            <div class="flexRow">
                <article>
                    <h2>Register now and get started with SI CHATROOM</h2>
                    <p>For any kind of issus or troble connect with for solution which should be Fast and Effective</p>
                </article>
                <aside>
                    <form method="post" action="">
                        <h2>Join Us!</h2>
                        <input type="text" name="txtName" id="txtName" placeholder="Full Name" />
                        <input type="text" name="txtEmail" id="txtEmail" placeholder="E-mail" />
                        <input type="text" name="txtPhone" id="txtPhone" placeholder="Contact Number" />
                        <button type="submit">CONNECT NOW!</button>
                    </form>
                </aside>
            </div>
        </div>
    </section>
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