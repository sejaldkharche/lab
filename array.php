<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        function reverse(array) {
            var output = [];
            while (array.length) {
                output.push(array.pop());
            }

            return output;
        }

        console.log(reverse([1, 2, 3, 4, 5, 6, 7]));
        alert(reverse([1, 2, 3, 4, 5, 6, 7]));
    </script>

</body>

</html>
