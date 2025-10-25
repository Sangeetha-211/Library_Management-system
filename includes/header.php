
<style>
/* Logo Animation */
.animated-logo {
    animation: fadeInDown 1s ease-in-out;
    width: 250px;
    transition: transform 0.3s ease-in-out;
}

.animated-logo:hover {
    transform: scale(1.1);
}

/* Button Animation */
.animated-button {
    animation: fadeIn 1.5s ease-in-out;
    transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
}

.animated-button:hover {
    background-color: #ff4d4d;
    transform: scale(1.05);
}

/* Link Animation */
.animated-link {
    position: relative;
    animation: fadeInUp 1s ease-in-out;
    transition: color 0.3s ease-in-out;
}

.animated-link:hover {
    color: #ff4d4d;
    text-decoration: underline;
}

/* Dropdown Menu Animation */
.dropdown-menu {
    animation: fadeIn 0.5s ease-in-out;
}

/* Keyframes for Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
    </style>
    <div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">
                <img src="assets/img/logo.png" class="animated-logo" />
            </a>
        </div>
        <?php if ($_SESSION['login']) { ?>
            <div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right animated-button">LOG ME OUT</a>
            </div>
        <?php } ?>
    </div>
</div>
<!-- LOGO HEADER END-->
<?php if ($_SESSION['login']) { ?>
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active animated-link">DASHBOARD</a></li>
                            <li><a href="issued-books.php" class="animated-link">Issued Books</a></li>
                            <li>
                                <a href="#" class="dropdown-toggle animated-link" id="ddlmenuItem" data-toggle="dropdown"> Account <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php" class="animated-link">My Profile</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php" class="animated-link">Change Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php" class="animated-link">Home</a></li>
                            <li><a href="index.php#ulogin" class="animated-link">User Login</a></li>
                            <li><a href="signup.php" class="animated-link">User Signup</a></li>
                            <li><a href="adminlogin.php" class="animated-link">Admin Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>