<div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="#!">Mini Loja</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/cart">Cart</a></li>
            <?php if($instances['auth']::auth()): ?>
            <li class="nav-item">
                <a class="nav-link" href="/account">Bem vindo <?= $instances['auth']::auth()->fullName;?></a>
            </li>
            <li class="nav-item">
                <a href="/logout" class="nav-link">Logout</a>
            </li>
            <li class="nav-item">
                <a href="/admin" class="nav-link">Dashboard</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
            <?php endif;?>
        </ul>
        <form class="d-flex" action="/cart" method="get">
            <button class="btn btn-outline-dark" type="submit">
                <i class="bi-cart-fill me-1"></i>
                Cart
                <span class="badge bg-dark text-white ms-1 rounded-pill">
                    <?= $instances['cart']::getTotalProductsInCart(); ?>
                </span>
            </button>
        </form>
    </div>
</div>