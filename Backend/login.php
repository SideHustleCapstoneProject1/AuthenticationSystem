<?php 
    require_once './server/header.php'; 
    require_once './server/config/functions.php';
    signinUser();
?>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                
                <form method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <?php 
                        if(isset($_SESSION['MESSAGE'])) {
                            displaySession();
                        }
                    ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="teamyellow@sidehustle.ng" name="username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="btn_login" />
                    <p class="social-text">Or </p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                ex ratione. Aliquid!
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    <a href="index.php" style="text-decoration: none; color: white;">Sign up</a>
                </button>
            </div>
            <img src="assets/img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                laboriosam ad deleniti.
                </p>
                <button class="btn transparent" id="sign-in-btn">
                Sign in
                </button>
            </div>
            <img src="assets/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

<?php require_once './server/footer.php'; ?>

