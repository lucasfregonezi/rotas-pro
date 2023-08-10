<?php $this->layout('master') ?>
<div class="container text-center">
    <form action="/login" method="post">
        <div class="row">
            <div class="col-5"></div>
            <div class="col-5">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputUsername" class="col-form-label">Username</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" for="inputUsername" name="email" value="lucasfregonezi@gmail.com"
                            class="form-control" aria-describedby="usernameHelpInline">
                    </div>
                    <div class="col-auto">

                    </div>
                </div>
                <div class="row g-3 align-items-center mt-1">
                    <div class="col-auto">
                        <label for="inputPassword5" class="col-form-label">Password</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" for="inputPassword5" name="password" value="lucas123"
                            class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-auto">

                    </div>
                </div>
                <div class="row g-3 align-items-center">
                    <div class="col-auto"></div>
                    <div class="col-auto">
                        <button type="submit">Login</button>
                    </div>
                    <div class="col-auto"></div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </form>
</div>