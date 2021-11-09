<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
        
        <!-- custom css -->
        <link rel="stylesheet" href="style.css" />

        <!-- project title -->
        <title>Registration Form</title>

        <!-- project name and description -->
        <meta name="Registration" description="user login and sign up page">

    </head>
    <!-- end of head -->

    <body>
    
    <script src="app.js"></script>
    <script>
        $("form").submit(function(){
            $.post($(this).attr("action"), $(this).serialize());
            return false;
        });
    </script>
    </body>
</html>