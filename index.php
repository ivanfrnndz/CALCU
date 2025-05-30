<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Colorful Calculator</title>
    <style>
        body {
            background: linear-gradient(to right, #ffecd2,rgb(255, 0, 0));
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="number"], select {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #ff7eb9;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff4d6d;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #222;
            background: #e0ffe0;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>CALCU</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>
            <select name="operation" required>
                <option value="">--Select Operation--</option>
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (×)</option>
                <option value="divide">Division (÷)</option>
            </select><br>
            <input type="submit" name="submit" value="Calculate">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = '';

            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 == 0) {
                        $result = "Cannot divide by zero.";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    $result = "Invalid operation selected.";
            }

            echo "<div class='result'><strong>Result:</strong> $result</div>";
        }
        ?>
    </div>
</body>
</html>
