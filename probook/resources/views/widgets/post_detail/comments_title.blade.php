<p class="text-muted"><i class="fa fa-comment" aria-hidden="true"></i>
    <small>
        @if($post->getCommentCount() > 0)
            @if($post->getCommentCount() > 1){{ $post->getCommentCount().' comments' }}@else{{ $post->getCommentCount().' comment' }}@endif
        @else
            well it looks like people are procrastinating commiting on your post procrastinate a bit and see if they finished procrastinating.
        @endif
    </small>
</p>
<hr>
@if($post->getCommentCount() > 2 && (empty($comment_count) || $comment_count < 3))
    <a class="btn btn-link btn-block btn-xs" href="{{ url('/post/'.$post->id) }}"><i class="fa fa-bars" aria-hidden="true"></i> Show all comments</a>
@endif