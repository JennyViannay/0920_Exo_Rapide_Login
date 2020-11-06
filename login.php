<?php 
require 'head.php'; 

$users = [
    [
        'username' => 'jenny',
        'password' => 1234,
        'role' => 'admin'
    ],
    [
        'username' => 'plop',
        'password' => 1234,
        'role' => 'user'
    ]
];

if(!empty($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    header('Location:index.php');
}

?>

<div class="container text-center">
    <div class="col-6 m-auto">
        <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php require 'footer.php'; ?>