@if (current_user()->isNot($user))
{{--@unless(auth()->user()->is($user))--}}
{{--    можно и так и так--}}
{{--@endunless--}}
    <form method="POST" action="/profiles/{{ $user->name }}/follow">
        @csrf
        <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
        </button>

    </form>
@endif
