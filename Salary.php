<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="get">

        <label for="firstName">First Name:</label>
        <input type="text" name="firstName">
        <br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName">
        <br><br>

        <label for="position">Position:</label>
        <input type="text" name="position">
        <br><br>

        <label for="salary">Salary:</label>
        <input type="text" name="salary">
        <br><br>

        <label for="income">Earned Income:</label>
        <input type="text" name="income">
        <br><br>


        <label for="percentage">Percentage Of Income (Optional):</label>
        <input type="text" name="percentage" min="0" max="100">
        <br><br>

        <button>Submit</button>
    </form>

    <?php

    if ($_GET) {

        if (empty($_GET["firstName"]) || empty($_GET["lastName"]) || empty($_GET["position"]) || empty($_GET["salary"]) || empty($_GET["income"])) {

            echo "<h1>Please Fill Out Every Form. Except Optional Form.</h1>";

        } else {

            if (isset($_GET["firstName"]) && isset($_GET["lastName"]) && isset($_GET["position"]) && isset($_GET["salary"]) && isset($_GET["income"]) && isset($_GET["percentage"])) {

                $firstName = $_GET["firstName"];
                $lastName = $_GET["lastName"];
                $position = $_GET["position"];
                $salary = $_GET["salary"];
                $income = $_GET["income"];
                $percentage = $_GET["percentage"];

                $cutSalary = $salary * 0.2;

                if (isset($_GET["percentage"]) && $_GET["percentage"] >= 0 && $_GET["percentage"] < 100) {
                    $percentage = $_GET["percentage"] / 100;
                    $cutSalary = $percentage * $salary;
                }
            }

            $finalSalary = $income - $cutSalary;

            echo "<h2>Payroll Details</h2>";
            echo "<table border='1'>";
            echo "<tr><th>First Name</th><th>Last Name</th><th>Position</th><th>Salary</th><th>Earned Income</th><th>Percentage Of Income</th><th>Final Income</th></tr>";
            echo "<tr><td>$firstName</td><td>$lastName</td><td>$position</td><td>$salary</td><td>$income</td><td>$cutSalary</td><td>$finalSalary</td></tr>";
            echo "</table>";
        }
    }



    ?>


</body>

</html>