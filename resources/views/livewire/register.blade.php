<div>
    <center>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" style="max-width: 70px;" class="mt-5" alt="">
        <div class="card shadow-sm p-2 mt-3" style="max-width: 500px;">
            <h4>Sign-Up</h4>
            <form wire:submit="save">
                @csrf
                <p class="my-0 mb-1" align="left">Username</p>
                <input type="text" wire:model="name" name="name" class="form-control mb-2">
                <p class="my-0 mb-1" align="left">Email</p>
                <input type="email" wire:model="email" name="email" class="form-control mb-2">
                <p class="my-0 mb-1" align="left">Password</p>
                <input type="password" wire:model="password" name="password" class="form-control mb-2">
                <div class="row">
                    <div class="col-8">
                        <p class="mb-0 mt-2" align="right">
                            <a href="/login" wire:navigate class="text-secondary text-dark link-underline link-underline-opacity-50">Sudah Punya Akun ? </a>
                        </p>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-dark w-100">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </center>
</div>
