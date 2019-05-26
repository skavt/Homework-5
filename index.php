<?php

use src\H1\Request;
use src\H1\Response;
use src\H2\Router;

require 'users/users.php';

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

$users = getUsers();

$router = new Router(new Request);

$router->get('/new', 'main'); 
?>

<div class="container">
    <table class="table">
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td>
                    <a href="operators/login.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">Login</a>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>