@foreach ($data_user as $user)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->address }}</td>
        <td>{{ $user->role->role_name }}</td>
        <td><img class="image_user_list" src="{{ asset('uploads') }}/{{ $user->image_user }}" alt=""></td>
        <td style="width: 174px;">
            <a style="float: left" href="{{route('permission.edit',$user->id) }}" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-info-circle"></i>
                </span>
                <span class="text">{{ __('message.permission') }}</span>
            </a>
        </td>
        <td style="width: 214px;">
            <a style="float: left" href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-info-circle"></i>
                </span>
                <span class="text">{{ __('message.update_bnt') }}</span>
            </a>
            <a style="float: left" href="{{ route('user.destroy', $user->id) }}"
                class="btn btn-danger btn-icon-split  btndelete">
                <span class="icon text-white-50">
                    <i class="fas fa-trash"></i>
                </span>
                <span class="text">{{ __('message.delete') }}</span>
            </a>
        </td>
    </tr>
@endforeach
