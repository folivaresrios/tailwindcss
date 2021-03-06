@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="sm:w-5/6 mx-auto lg:w-1/3">
        <div class="rounded shadow">
            <div class="font-medium text-sm text-brand-darker bg-white border-b border-grey-light p-3 rounded-t">
                Reset Password
            </div>
            <div class="bg-white p-3 rounded-b">
                <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="flex sm:flex-col md:flex-row items-stretch mb-3">
                        <label for="email" class="md:text-right sm:text-left font-semibold text-grey-dark text-sm pt-2 pr-3 sm:pb-1 align-middle md:w-1/4 sm:w-full">E-Mail Address</label>
                        <div class="flex flex-col w-3/4">
                            <input id="email" type="email" class="flex-grow h-8 px-2 border rounded {{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ $email or old('email') }}" required autofocus>
                            {!! $errors->first('email', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>

                    <div class="flex sm:flex-col md:flex-row items-stretch mb-3">
                        <label for="password" class="md:text-right sm:text-left font-semibold text-grey-dark text-sm pt-2 pr-3 sm:pb-1 align-middle md:w-1/4 sm:w-full">Password</label>
                        <div class="flex flex-col w-3/4">
                            <input id="password" type="password" class="flex-grow h-8 px-2 rounded border {{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}" name="password" required>
                            {!! $errors->first('password', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>

                    <div class="flex sm:flex-col md:flex-row items-stretch mb-3">
                        <label for="password_confirmation" class="md:text-right sm:text-left font-semibold text-grey-dark text-sm pt-2 pr-3 sm:pb-1 align-middle md:w-1/4 sm:w-full">Confirm Password</label>
                        <div class="flex flex-col w-3/4">
                            <input id="password_confirmation" type="password" class="flex-grow h-8 px-2 rounded border {{ $errors->has('password_confirmation') ? 'border-red-dark' : 'border-grey-light' }}" name="password_confirmation" required>
                            {!! $errors->first('password_confirmation', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-3/4 md:ml-auto">
                            <button type="submit" class="bg-brand hover:bg-brand-dark text-white text-sm font-sembiold py-2 px-4 rounded mr-3">
                                Reset Password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
