
<!DOCTYPE html>
<html>
<head>
    <title>My Hello World Website</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(
                135deg,
                #EADCF8,
                #FCE4EC,
                #E0F0FF
            );
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.85);
            width: 420px;
            padding: 50px 35px;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(150, 120, 180, 0.15);
            border: 1px solid white;
        }

        .flower {
            font-size: 40px;
            margin-bottom: 15px;
        }

        h1 {
            color: #9874BC;
            font-size: 38px;
            margin-bottom: 15px;
        }

        p {
            color: #93869E;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .button {
            display: inline-block;
            background: #DCC6F2;
            color: #72548F;
            padding: 12px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .button:hover {
            background: #C8A9E8;
            transform: translateY(-3px);
        }

        .footer {
            color: #B5A4C5;
            font-size: 12px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <div class="card">

        <div class="flower">✿</div>

        <h1>Hello World!</h1>

        <p>
            Welcome to my little corner of the internet.
            This is my first website using XAMPP and VS Code.
        </p>

        <a href="#" class="button">Explore More ♡</a>

        <div class="footer">
            Made with love ♡ and a little bit of code.
        </div>

    </div>

</body>
</html>
