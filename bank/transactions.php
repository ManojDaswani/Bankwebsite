<?php 

session_start();

ini_set('display_errors', 'On'); 
error_reporting(E_ALL);

//Logic to secure the page

if(!(isset($_SESSION['authenticatedSession']) && strlen($_SESSION['authenticatedSession']['userId']) > 0)){

	//Redirect to login
	header("Location: index.php");

	exit();

}

require_once("includes/functions/user-functions.php");

require_once("includes/functions/account-functions.php");

$usersData = getUsers($_SESSION['authenticatedSession']['userId']);

$usersAccounts = getAccounts($_SESSION['authenticatedSession']['userId'], null);

ini_set('display_errors', 'On'); 
error_reporting(E_ALL);


require_once('includes/initialize.php');

include(INCLUDE_PATH . '/staff_header.php'); 


?>

<main>
<?php include('includes/menu.php'); ?>
<div class = "main-content">

  <h2> 

    <?php 
    if(isset($_SESSION['manager']) && $_SESSION['manager'] === true){
      echo "Manager's Portal | Transactions";
    }else {
      echo "Internet Banking Dashboard | Transactions";
    }
    ?>

  </h2>



  <p> Account Number: <?php echo $_GET['account'] ?> </p>
  <br/>

  <h3> Transactions </h3>

  <table>
    <thead>
      <tr>
        <th> S/N </th>
        <th> Account Number </th>
        <th> Amount </th>
        <th> Type </th>
        <th> Description </th>
        <th> Date </th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <td> 1 </td>
          <td> 11111 </td>
          <td> $1,200.00 </td>
          <td> DR </td>
          <td> Payment for Phone </td>
          <td> 05/04/2019 </td>
      </tr>

      <tr>
          <td> 2 </td>
          <td> 2500 </td>
          <td> $2,500.00 </td>
          <td> DR </td>
          <td> Payment for Power </td>
          <td>10/05/2019 </td>
      </tr>
      
    </tbody>
  </table>

</div>
</main>

<?php include(INCLUDE_PATH . '/staff_footer.php'); ?>