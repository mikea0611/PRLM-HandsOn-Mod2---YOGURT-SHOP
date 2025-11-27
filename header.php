<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogurt Shop</title>
    <style>
        body{ 
            font-family: Arial, sans-serif; 
            background: #FFF9F3; 
            margin: 0; 
            padding: 0; 
            color: #333; 
        }

        header{ 
            background: #FFB3B3; 
            color: white; 
            text-align: center; 
            padding: 20px 0; 
        }

        nav{ 
            background: #FFCCB3; 
            padding: 15px 0; 
            text-align: center; 
        }

        nav a{ 
            margin: 0 20px; 
            text-decoration: none; 
            color: #6B4F4F; 
            font-weight: bold; 
            font-size: 16px; 
        }

        nav a:hover{ 
            color: #FF6F61; 
        }

        footer{ 
            background: #FFB3B3; 
            color: white; 
            text-align: center; 
            padding: 15px 0; 
            margin-top: 20px; 
        }

        .container{ 
            width: 80%; 
            margin: auto; 
            padding: 30px 0; 
        }

        h1, h2, h3{ 
            color: #6B4F4F; 
        }

        p{ 
            font-size: 16px; 
            line-height: 1.6; 
        }

        ul{ 
            list-style-type: none; 
            padding-left: 0; 
        }

        li{ 
            margin: 5px 0; 
        }

        img {
            display: block;
            width: 500px; 
            height: auto; 
            margin-left: auto;
            margin-right: auto;
            border-radius: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 1.1rem;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }

        select {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fafafa;
            color: #333;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        select:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        button {
            padding: 12px 20px;
            font-size: 1.1rem;
            background-color:rgb(247, 212, 196); /* Blue color */
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }


    </style>
</head>
<body>
<header>
    <h1>Welcome to Almea's Yogurt Shop</h1>
</header>

<img src="image/yogurts.jpg" alt="Two Yogurts">

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="store.php">Store</a>
</nav>
