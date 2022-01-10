<nav class="navbar navbar-expand-lg navbar-light ">

    <?php
    if (isset($_SESSION['user']['profile_image'])) :
    ?>
        <div class="navImage"><img src="/uploads/<?php echo $_SESSION['user']['profile_image'] ?>"></div>

    <?php endif;
    ?>

    <a class="navbar-brand" href="#"><?php echo $config['title']; ?></a>

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/index.php' ? 'active' : ''; ?>" href="/index.php">Home</a>
        </li>


        <li class="nav-item">
            <?php if (isset($_SESSION['user'])) : ?>
                <a class="nav-link" href="/app/users/logout.php">Logout</a>

        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/login.php' ? 'active' : ''; ?>" href="/update.php">Edit profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/lists.php' ? 'active' : ''; ?>" href="/create.php">Lists</a>
        </li>
    <?php else : ?>
        <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/login.php' ? 'active' : ''; ?>" href="/login.php">Login</a>

        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['SCRIPT_NAME'] === '/register.php' ? 'active' : ''; ?>" href="/register.php">Sign up</a>
        </li>
    <?php endif; ?>
    </li>
    </ul>
</nav>
