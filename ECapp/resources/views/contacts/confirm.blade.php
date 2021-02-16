@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mt-2 mb-5">お問い合わせ確認</h1>
    <div class="container">
        <form method="POST" action="{{ route('contacts.complete') }}">
            {{ csrf_field() }}
            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お名前<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    {{ $name }}
                </div>
            </div>
            <input type="hidden" name="name" value="{{ $name }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    {{ $email }}
                </div>
            </div>
            <input type="hidden" name="email" value="{{ $email }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">電話番号</p>
                <div class="col-sm-8">
                    {{ $phone_number }}
                </div>
            </div>
            <input type="hidden" name="phone_number" value="{{ $phone_number }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    {{ $sex }}
                </div>
            </div>
            <input type="hidden" name="sex" value="{{ $sex }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    {{ $content }}
                </div>
            </div>
            <input type="hidden" name="content" value="{{ $content }}">

            <div class="text-center">
                <input value="入力画面へ戻る" onclick="history.back();" type="button" class="btn btn-secondary">
                <button name="action" type="submit" value="submit" class="btn btn-primary">送信</button>
            </div>
        </form>
    </div>
</div>
@endsection
