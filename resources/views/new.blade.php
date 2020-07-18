@extends('layouts.default')

@section('title', '新規投稿')

@section('content')
    <form action="{{ url('/posts') }}" method="post">
    {{ csrf_field() }}
        <p>
            <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="投稿者を入力">
        </p>
        <p>
            <input type="password" name="password" placeholder="パスワードを入力">
        </p>
        @if ($errors->has('password'))
            <span class="error">{{ $errors->first('password') }}</span>
        @endif
        <p>
            <textarea name="body" rows="8" cols="40" value="{{ old('body') }}" placeholder="コメントを入力"></textarea>
        </p>
        @if ($errors->has('body'))
            <span class="error">{{ $errors->first('body') }}</span>
        @endif
        <p>
            <input type="submit" value="投稿する">
        </p>
    </form>
@endsection


{{-- RewriteEngine On

# Handle Authorization Header
RewriteCond %{HTTP:Authorization} .
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}] --}}
