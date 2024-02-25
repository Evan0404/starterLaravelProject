<div>
    <center>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" style="max-width: 70px;" class="mt-5" alt="">
        <div class="card shadow-sm p-2 mt-3" style="max-width: 500px;">
            <h4>Sign-In</h4>
            <form wire:submit="login">
                <p class="my-0 mb-1" align="left">Email</p>
                <input type="text" wire:model="email" name="email" class="form-control mb-2">
                <p class="my-0 mb-1" align="left">Password</p>
                <input type="password" wire:model="password" name="password" class="form-control mb-2">
                <p class="mt-1 mb-1 text-light" align="left"><a href="" class="text-dark link-underline link-underline-opacity-50 ">Lupa Password</a></p>
                <div class="row">
                    <div class="col-8">
                        <p class="mb-0 mt-2" align="right">
                            <a href="/register" wire:navigate class="text-secondary text-dark link-underline link-underline-opacity-50">Belum Punya Akun ? </a>
                        </p>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-dark w-100">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </center>
</div>
