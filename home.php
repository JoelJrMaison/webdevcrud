<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && isset($_SESSION['role'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/tailwind.css">
    <title>Document</title>
</head>
<body class="">
    <nav>
        <div class="flex mt-8">
            <h1 class="flex-1 ml-5 text-xl text-green-500 font-semibold">X-Men Mutants</h1>
            <img src="img/carbon_user-profile.png" alt="profile" class="mr-8 mb-1">
        </div>
        
        <img src="img/Rectangle 18.png" alt="">
    </nav>

    <section>
        <div class="mt-5 ml-4">
            <h1 class="font-bold text-gray-500">X-Men Super Heroes</h1>
            <p class="text-sm">Some of the mutants who had the honour of serving with Xavier</p>
            <div class="mt-5">
                <a href="#" class="bg-indigo-500 shadow-lg text-white py-2 px-3">Add New Hero</a>
            </div>
            
        </div>
    </section>

    <!-- heroes section -->
    <section class="mt-10">
        <div class="ml-5">
            <img src="img/Rectangle 1.png" alt="professorX" class="mt-5 ml-5">
            <div class="upper flex flex-col">
                <h1 class="text-green-500 font-semibold text-xl mt-3 ml-5">Professor X</h1>
                <?php if ($_SESSION['role'] === 'admin'){ ?>
                    <a href="#" class="bg-indigo-500 shadow-lg text-white py-2 px-3">Delete Hero</a>
                    <a href="#" class="bg-indigo-500 shadow-lg text-white py-2 px-3">Update Hero</a>
                <?php } ?>
            </div>
            <h2 class="text-lg font-bold ml-5">Charles Xavier</h2>
            <p class="ml-5">
                Charles Xavier is the founder of the X-Men and was the original headmaster 
                of the Xavier Institute of Higher Learning. 
            </p>
        </div>
    </section>
    

</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
?>