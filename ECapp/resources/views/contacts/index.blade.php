@extends('layouts.app')

@section('content')
<div class="container">
        <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
        <div class="container">
            <form method="POST" action="{{ route('contacts.confirm') }}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">お名前<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">電話番号</p>
                    <div class="col-sm-8">
                        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
                    </div>
                </div>

                <div class="form-group row my-5">
                    <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <label>男性</label><input type="radio" class="mx-2" id="male" name="sex" value="男性" checked>
                        <label>女性</label><input type="radio" class="mx-2" id="female" name="sex" value="女性">
                        <label>不明</label><input type="radio" class="mx-2" id="gender_natural" name="sex" value="不明">
                    </div>
                </div>

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
                </div>

                <div class="form-group row text-center">
                    <textarea name="content" class="form-control m-2" value="{{ old('content') }}"></textarea>
                </div>

                <div class="form-group row justify-content-center">
                    <button type="submit" class="btn btn-info">確認画面へ</button>
                </div>
            </form>
        </div>
    </div>
@endsection
