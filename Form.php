<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login&Registration</title>
  <link rel='stylesheet' href='./output.css'>  

</head>
<body class="bg-blue-500" >




<form action="./RegLoginDataSet.php" method="POST">
 
<div class="w-100 bg-gray-200  m-30 ml-150 p-10 rounded-sm  ">
    <div class="grid gap-6 mb-6 md:grid-cols-2 w-170 "  >
        <div>
        <h1 class="text-2xl pl-25   ">Registration</h1>
            <label for="FullName:" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">FullName:</label>
            <input type="text" id="FullName:" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="FullName:" name="name" required />
  
        
       

      
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password"  name="password"required />
         
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email"  name="email"required />

    </div> 
    </div>    
    
    <button type="submit" class="text-white bg-green-600 hover:bg-green-900 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 " name="submit">Submit</button>
   <h5>You are already login??  <a href="./loginfrm.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Login</a></h5>

  

</form>


</body>
</html>


