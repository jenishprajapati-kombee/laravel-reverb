<div>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col">
                <form class="form" wire:submit.prevent='triggerEvent'>
                    <label for="fname">Send Realtime Message</label><br>
                    <input type="text" wire:model='message' class="form-control">
                    <input type="submit" class="btn btn-primary mt-3">
                </form>
            </div>
        </div>
    </div>
</div>
