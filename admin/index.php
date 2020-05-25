
  <?php
  error_reporting(0);
  
  include('header.php');
  include('sidemenu.php');

  $page = $_GET['page'];
  switch ($page) {
    case 'user':
      include('pages/user.php');
      break;
    case 'cadUser':
      include('pages/cadUser.php');
      break; 
      case 'atUser':
        include('pages/atUser.php');
        break; 
    default:
      include('pages/home.php');
      break;
  }
  include('footer.php');
  ?>
  
  