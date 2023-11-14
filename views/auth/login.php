<div class="login">
    <div class="content">
        <div class="content-sm">
            <?php include_once __DIR__ . '/../templates/HeaderPage.php';?>
        </div>
        <form action="/login" method="POST" class="form">
            <div class="row">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="email">
            </div>

            <div class="row">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="passwors">
            </div>

            <input type="submit" value="Login">
        </form>
    </div>
</div>