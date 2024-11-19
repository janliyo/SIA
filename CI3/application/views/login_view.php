<form action="<?= base_url("LoginController/login_user"); ?>" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Enter Username">

    <label for="password">Password</label>
    <input type="text" name="password" id="password" placeholder="Enter password">

    <button type="submit">Login</button>
</form>

