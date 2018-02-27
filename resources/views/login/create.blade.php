@extends('layouts.app')

@section('content')
    <section class="login-form">
        <div class="wrapper [ max-w-sm mt-32 ]">
            <h1 class="[ mb-16 ]">Login to {{ config('app.name') }}</h1>

            @if($message = session('message'))
                <p>{{ $message }}</p>
            @endif

            <form method="POST" action="{{ route('login.store') }}">
                {{ csrf_field() }}

                @textfield([
                    'label' => 'Email address or Username',
                    'name'  => 'login',
                ])
                @endtextfield

                @textfield([
                    'label'     => 'Password',
                    'name'      => 'password',
                    'utilities' => 'mt-8',
                ])
                @endtextfield

                <div class="field [ mt-8 ]">
                    <label>
                        <input type="checkbox" name="remember">
                        Remember Me?
                    </label>
                </div>

                <button class="button [ mt-16 ]" type="submit">Login</button>
            </form>
        </div>
    </section>
@endsection
