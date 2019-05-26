<?php

include '../view/header.php';
require __DIR__ . '/../users/users.php';

if (!isset($_GET['id'])) {
    include "../view/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "../view/not_found.php";
    exit;
}

?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <form style="display: inline-block" method="POST" action="submit.php">
                <input name="name" value="<?php echo $user['name'] ?>">
                <input type="password" name="password" value="<?php echo $user['password'] ?>">
                <a href="submit.php?id=<?php echo $user['id'] ?>" class="btn btn-secondary">Login</a>
            </form>
        </div>
    </div>
</div>