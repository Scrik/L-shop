@extends('layouts.shop')

@section('title')
    Добавить сервер
@endsection

@section('content')
    <div id="content-container">
        <div id="cart-header" class="z-depth-1">
            <h1><i class="fa fa-server fa-lg fa-left-big"></i>Добавить сервер</h1>
        </div>

        <form method="post" action="{{ route('admin.servers.add.save', ['server' => $currentServer->id]) }}">
            <div id="s-change-name">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-xs-0">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 col-12 text-center">
                            <div class="md-form text-left">
                                <i class="fa fa-refresh prefix"></i>
                                <input type="text" name="server_name" id="server-name" class="form-control" value="{{ old('server_name') }}">
                                <label for="server-name">Имя сервера</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="s-settings-cat">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-xs-0">
                    <div class="row">
                        <div class="col-12 text-center s-s-header">
                            <h3>Категории:</h3>
                        </div>
                        <div class="col-sm-6 offset-sm-3 col-12">
                            <div id="server-add-categories" class="all-cat text-left">
                                <div class="s-set-category">
                                    <div class="md-form">
                                        <i class="fa fa-dot-circle-o prefix"></i>
                                        <input type="text" name="categories[]" id="cat" class="form-control category-name">
                                        <label class="category-name-label" for="cat">Имя категории</label>
                                    </div>
                                    <a class="btn danger-color server-add-remove-category"><i class="fa fa-times fa-lg"></i></a>
                                </div>
                            </div>

                            <div class="plus-category">
                                <div class="md-form">
                                    <a id="server-add-add-category" class="btn green btn-block"><i class="fa fa-plus fa-left"></i>Добавить категорию</a>
                                </div>
                            </div>

                            <div class="mt-2 mb-1">
                                <input type="checkbox" name="enabled" id="server-edit-enabled" checked="checked" value="1">
                                <label for="server-edit-enabled" class="ckeckbox-label">
                                    <span class='ui'></span>
                                    Включить сервер
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 offset-sm-3 col-12 save-and-del text-center">
                            {{ csrf_field() }}
                            <button class="btn btn-info"><i class="fa fa-check fa-left"></i>Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection