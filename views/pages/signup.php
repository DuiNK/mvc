
<?php 
    include_once 'views/layouts/header.php';
    #include_once './helpers/session_helper.php';
?>
    <h1 class="header">Please Signup</h1>

    <?php //flash('register') ?>

    <form method="post" action="./controllers/Users.php">
        <input type="hidden" name="type" value="register">
        <input type="text" name="users_name" 
        placeholder="Full name...">
        <input type="text" name="users_email" 
        placeholder="Email...">
        <input type="text" name="users_Uid" 
        placeholder="Username...">
        <input type="password" name="users_Pwd" 
        placeholder="Password...">
        <input type="password" name="pwdRepeat" 
        placeholder="Repeat password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    
<?php 
    include_once 'views/layouts/footer.php'
?>
