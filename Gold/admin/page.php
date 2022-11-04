<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <style>
        body {background-color: powderblue;}
        p {border: 2px solid white;
            padding: 30px;
            font-family:verdana;}

        h1 {background-color: #52b2bf;
            text-align:center;}
    </style>

</head>

    
    <body>

    
        <h1> WORKMANSHIP CALCULATOR </h1>
        
    
        <form name="form1"
            actions="/action_page.php"
            onsubmit="return validateForm()"
            method="post">

           <p> Please fill in the blank:<br><br>
            SKU:
            <input type="text" name="sku" id="sku">
            <br><br>

            Category:
            <input type="text" name="category" id="category">
            <br><br>

            Design:
            <input type="text" name="design" id="design" >
            <br><br>

            Purity:
            <input type="text" name="purity" id="purity">
            <br><br>

            Weight:
            <input type="text" name="weight" id="weight" oninput="calculate()">

            <br><br>
            <input type="submit" name="Submit">
            
        </p>

        <p>

            Workmanship Capital Type:
            <select name="capital" id="capital" form="capital_form">
                <option value="gramC">Per Gram</option>
                <option value="typeC">Per Type</option>
            </select>
            <br><br>
            Workmanship Capital:
            <input type="text" name="capital2" id="capital2" oninput="calculate()">
            <br><br>

            Workmanship Sale Type:
            <select name="sale" id="sale" form="sale_form">
                <option value="gramS">Per Gram</option>
                <option value="typeS">Per Type</option>
            </select>
            <br><br>
            Workmanship Sale:
            <input type="text" name="sale1" id="sale1" oninput="calculate()">
            <br><br>

        </p>

        <p>

            Weight & Workmanship Capital Type (Per Gram): 
            <span id="capital_weight">0</span>

            <br><br>Weight & Workmanship Sale Type (Per Gram):
            <span id="sale_weight">0</span>

            <br><br> Total Workmanship: 
            <span id="total_workmanship">0</span> 

        </p>

        </form>
    </body>

    <script>
        function validateForm() {
            let x = document.forms["form1"]
            ["sku", "category", "design", "purity", "weight"].value;

            if (x == ""){
                alert ("Please fill in the blanks");
                return false;
            }
        }

            function calculate() {
                var weight =document.getElementById("weight").value;
                var capital =document.getElementById("capital2").value;
                var sale =document.getElementById("sale1").value;
                var capitalWeight = weight * capital;
                var saleWeight = weight*sale;
                var twork = weight * (capitalWeight/saleWeight);
            
                document.getElementById("capital_weight").innerHTML=capitalWeight;
                document.getElementById("sale_weight").innerHTML=saleWeight;
                document.getElementById("total_workmanship").innerHTML=twork;
            }

    </script>

</html>