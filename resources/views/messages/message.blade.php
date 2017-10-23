<img src="{{ $message->image }}" alt="Message banner" class="img-thumbnail">
<p class="card-text">
<div class="text-muted">wrote by <a href="/{{$message->user->username}}">{{ $message->user->name }}</a></div>
{{ $message->content }}
</p>
<div class="card-text float-right">
    {{ $message->created_at }}
</div>