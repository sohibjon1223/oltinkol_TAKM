<?php
// Ma'lumotlar bazasiga ulanish
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_website";

$conn = new mysqli($servername, $username, $password, $database);

// Xatolik tekshirish
if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

// Ma'lumotlarni olish
$sql = "SELECT * FROM content ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  
    <title>Oltinko'l TAKM - Bosh sahifa</title>
    <style>
        .instagram-icon {
      font-size: 40px;
      color: #E1306C;
      text-decoration: none;
    }

    .instagram-icon1 {
      font-size: 40px;
      color: #3059e1;
      text-decoration: none;
    }

    .instagram-icon2 {
      font-size: 40px;
      color: #E1306C;
      text-decoration: none;
    }

    .instagram-icon3 {
      font-size: 40px;
      color: #4be085;
      text-decoration: none;
    }
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
           header {
      background: #1a1a2e;
      color: white;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
        footer {
      background: #1a1a2e;
      color: #ccc;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
    header h1 {
      margin: 0;
      font-size: 24px;
    }


    nav {
      margin-top: 10px;
    }

    nav a {
      color: #fdfcdc;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
      font-size: 18px;
      border-bottom: 2px solid transparent;
      transition: border-bottom 0.3s;
    }

    nav a:hover {
      border-bottom: 2px solid #fdfcdc;
    }

        .container {
            padding: 40px;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body style="
  margin: 0;
  font-family: 'Inter', sans-serif;
  background:
    linear-gradient(to bottom, rgba(120, 165, 233, 0.4), rgba(255, 255, 255, 0.4)),
    url('bg.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  color: #2c3e50
">

<header>
    <h1>Oltinko'l TAKM</h1>
    <nav>
        <a href="index.php">Bosh sahifa</a>
        <a href="about.html">Biz haqimizda</a>
        <a href="contact.html">Aloqa</a>
        <a href="admin/index.html">.</a>
    </nav>
</header>
<center>
<div class="container">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";

            if (!empty($row['image'])) {
                echo "<img src='uploads/" . htmlspecialchars($row['image']) . "' alt='Rasm'>";
            }

            echo "<p>" . nl2br(htmlspecialchars($row['body'])) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Hozircha hech qanday ma'lumot yo'q.</p>";
    }

    $conn->close();
    ?>
</div>
</center>

<footer>
    <p>© 2025 Oltinko'l TAKM. Barcha huquqlar himoyalangan.</p>
     <a href="https://www.instagram.com/oltinkol_takm" class="instagram-icon" target="_blank">
    <i class="fab fa-instagram"></i>
  </a>
    <a href="https://facebook.com/share/p/19SAKoFm6H/" class="instagram-icon1" target="_blank">
      <i class="fab fa-facebook"></i>
    </a>
    <a href="https://youtube.com/@oltinkolTAKM" class="instagram-icon2" target="_blank">
      <i class="fab fa-youtube"></i>
    </a>
    <a href="https://t.me/oltinkolTAKM" class="instagram-icon3" target="_blank">
      <i class="fab fa-telegram"></i>
    </a>
  </footer>
</body>
</html>
