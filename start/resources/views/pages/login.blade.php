@extends('template.layout')

@section('content')

    <div data-form-wrapper>

        <form
            method="post"
            action="/login/post"
            data-ajax-form
            data-success-behaviour="redirect"
            novalidate
        >

            <h1>Login</h1>

            <div class="divider brtd"></div>

            <label for="email">
                Email address: *
                <span data-validation="email">
                    <span data-case="required">Please provide your email address</span>
                    <span data-case="email">Invalid email address</span>
                    <span data-case="invalid">Invalid credentials</span>
                    <span data-case="inactive">
                        Your account has not been activated.<br />
                        <a href="/register/activation" id="resendActivation">Re-send activation email</a>
                    </span>
                    <span data-case="technical">Technical problem</span>
                </span>
            </label>
            <input
                type="email"
                name="email"
                id="email"
                data-validate="required|email"
            >

            <label for="password">
                Password: *
                <span data-validation="password">
                    <span data-case="required">Please provide your password</span>
                </span>
            </label>
            <input
                type="password"
                name="password"
                id="password"
                data-validate="required"
            >

            <label for="remember_me">
                <input
                    type="checkbox"
                    name="remember_me"
                    id="remember_me"
                    > Remember me
            </label>

            <input
                type="submit"
                class="button"
                value="LOG-IN"
                data-submit-trigger
            >

            <button
                type="button"
                class="button hide"
                disabled
                data-submit-pending
            >
                <i class="fa fa-spinner fa-spin"></i> PROCESSING
            </button>

        </form>

        <p data-confirmation></p>

    </div>

@endsection