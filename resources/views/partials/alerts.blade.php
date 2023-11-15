

@if (session()->has('failed'))
<div class="alert alert-danger" role="alert">
    {{ session('failed') }}
</div>
@endif