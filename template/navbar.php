<div class="d-flex flex-column w-100">
    <div class="logo-principal">
        <a href="../index.php">
            <img class="m-2 logo" src="../images/logo.png" alt="Logo du site">
        </a>
    </div>
    <div>
        <ul class="nav nav-tabs custom-navbar">
            <li class="nav-item ml-auto">
                <a class="nav-link active text-white bg-primary" aria-current="page" href="#">Tous les jeux</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active text-white bg-primary" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Par console</a>
                <ul class="dropdown-menu bg-primary">
                    <?php get_games_by_console() ?>
                </ul>
            </li>
        </ul>
    </div>
</div>