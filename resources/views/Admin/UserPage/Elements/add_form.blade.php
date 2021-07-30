<form class="user" action="" method="POST">
    @csrf
    @include('Admin.UserPage.Elements.message')
    <div class="form-group">
        <input type="text" class="form-control form-control-user" name="cate_name" id="exampleInputEmail" placeholder="Nhập Danh Mục">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" name="cate_name" id="exampleInputEmail" placeholder="Nhập Danh Mục">
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
        {{__('message.add_new')}}
    </button>
</form>