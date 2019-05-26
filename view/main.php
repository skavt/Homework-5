<?php 

require_once __DIR__ . '/users/users.php';

$users = getUsers();

?>
{header}

<div class="container">
    <p>
        <a class="btn btn-success" href="operators/create.php">Create new User</a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
    </table>
</div>


