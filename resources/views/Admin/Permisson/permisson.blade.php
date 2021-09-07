@extends('Layout.blank_admin')
<link href="{{ asset('site/css/checkbox.css') }}" rel="stylesheet">
@section('main')
    <div class="col-lg-7 add_form">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{ __('message.add_user') }}</h1>
            </div>
            <div class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="name" value="{{ $user_data[0]->name }}"
                        id="exampleInputEmail" placeholder="{{ __('message.name_user') }}">
                    <input type="hidden" name="id" value="{{ $user_data[0]->id }}">
                </div>
                <div class="form-group">
                    <select name="role_id" class="form-control custom-select">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}"
                                {{ $role->id == $user_data[0]->role_id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <form action="{{route('insert.permission',$user_data[0]->id)}}" method="POST">
                @csrf
                @foreach ($permission as $key => $per)
                    <p>
                        <input type="checkbox" name="permission[]" value="{{ $per->id }}" id="{{ $per->id }}" />
                        <label for="{{ $per->id }}">{{ $per->name }}</label>
                    </p>
                @endforeach
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    {{ __('message.update') }}
                </button>
            </form>
        </div>
    </div>
@stop
