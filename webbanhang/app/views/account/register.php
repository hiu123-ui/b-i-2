<?php include 'app/views/shares/header.php'; ?>

<?php
if (isset($errors)) {
    echo "<ul class='text-danger'>";
    foreach ($errors as $err) {
        echo "<li>$err</li>";
    }
    echo "</ul>";
}
?>

<div class="card shadow-lg p-5 text-center">
    <h2 class="mb-4">Create an Account</h2>
    <form class="user" action="/webbanhang/account/save" method="post">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input 
                    type="text" 
                    class="form-control form-control-user" 
                    id="username" 
                    name="username" 
                    placeholder="Username" 
                    required
                >
            </div>
            <div class="col-sm-6">
                <input 
                    type="text" 
                    class="form-control form-control-user" 
                    id="fullname" 
                    name="fullname" 
                    placeholder="Full Name" 
                    required
                >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input 
                    type="password" 
                    class="form-control form-control-user" 
                    id="password" 
                    name="password" 
                    placeholder="Password" 
                    required
                >
            </div>
            <div class="col-sm-6">
                <input 
                    type="password" 
                    class="form-control form-control-user" 
                    id="confirmpassword" 
                    name="confirmpassword" 
                    placeholder="Confirm Password" 
                    required
                >
            </div>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary btn-icon-split p-3">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">Register</span>
            </button>
        </div>
    </form>
</div>

<?php include 'app/views/shares/footer.php'; ?>