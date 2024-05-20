<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building Layout</title>
    <style>
        /* Style for the building layout */
        .building {
            font-family: Arial, sans-serif;
            width: 400px;
            margin: 0 auto;
            border: 2px solid #000;
            padding: 20px;
            text-align: center;
        }
        .apartment {
            margin-bottom: 20px;
        }
        .room {
            position: relative;
            display: inline-block;
            width: 70px;
            height: 70px;
            border: 1px solid #000;
            margin: 5px;
            line-height: 70px;
            color: #fff;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
        }
        .available {
            background-color: green;
        }
        .not-available {
            background-color: red;
        }
        .register-form {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            justify-content: center;
            align-items: center;
        }
        .register-form.visible {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="building">
        <h2>Building Layout</h2>
        <div class="apartment">
            <h3>Front Apartments</h3>
            <div class="room available" onclick="navigateToRegisterPage('R1')">R1</div>
            <div class="room available" onclick="navigateToRegisterPage('R2')">R2</div>
            <!-- Other room elements -->
        </div>
        <div class="apartment">
            <h3>Back</h3>
        </div>
    </div>

    <script>
        function navigateToRegisterPage(roomId) {
            window.location.href = 'register.php?room=' + roomId;
        }
    </script>
</body>
</html>
