<?php
$app_name = "Aplikasi PHP Pertama";
$port = "2000";
$current_time = date("Y-m-d H:i:s");
$ip_address = $_SERVER['SERVER_ADDR']; // Atau bisa Anda set manual jika perlu
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $app_name; ?> - Deploy Sukses!</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
            color: #333;
        }
        .container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 90%;
            animation: fadeIn 1s ease-out;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 2.5em;
        }
        p {
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        .highlight {
            color: #3498db;
            font-weight: bold;
        }
        .footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #7f8c8d;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $app_name; ?></h1>
        <p>🎉 Selamat, Deployment Sukses!</p>
        <p>Aplikasi ini berjalan di alamat IP Public Anda:</p>
        <p class="highlight"><?php echo $ip_address; ?>:<span class="port-highlight"><?php echo $port; ?></span></p>
        <p>Menggunakan alur CI/CD otomatis dari GitHub Actions.</p>
        <div class="footer">
            <p>Di-deploy pada: <span class="highlight"><?php echo $current_time; ?></span></p>
        </div>
    </div>
</body>
</html>
