<div class="panel panel-info">
    <div class="panel-heading">reblogged at {{ $status->local_datetime->diffForHumans() }}</div>

    <div class="panel-body">
        <div class="media">
            <div class="media-left">
                <a href="{{ $status->reblog->account_url }}" target="_blank">
                    <img class="media-object img-rounded toot-icon" src="{{ $status->reblog->avatar }}" alt="...">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading"><a href="{{ $status->reblog->account_url }}" target="_blank">{{ $status->reblog->name }}</a>
                <small>{{ $status->reblog->acct }}</small></h4>
                {!! $status->reblog->content !!}

                <div>
                    <a href="{{ $status->reblog->url }}" target="_blank">
                        <time datetime="{{ $status->reblog->created_at->toAtomString() }}">
                            {{ $status->reblog->created_at->diffForHumans() }}
                        </time>
                    </a>
                </div>

                @if(!empty($user))
                    <div>
                        <a href="{{ route('open.account.show', [
                            'user' => $user,
                            'username' => $status->account->username,
                            'domain' => $status->account->domain,
                            'status_id' => $status->status_id
                            ]) }}">
                            {{ $status->account->acct . '/' . $status->status_id }}

                        </a>
                    </div>
                @endif

            </div>

        </div>
    </div>
</div>
