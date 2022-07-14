@extends('admin.main')
@section('header')
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection
@section('content')
    <form  method="POST" action="{{route('addProduct')}}"  enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row" style="position: relative; margin:0 1px 85px 1px">
                <div class="form-group" style="position: absolute;
                width: 49%;">
                    <label for="menu">Tên Sản Phẩm</label>
                    <input type="text" value="{{old('name')}}" name="name" class="form-control" id="name" placeholder="Nhập tên sản phẩm">
                </div>
    
                <div class="form-group" style="position: absolute;
                float: right;
                right: 0%;
                width: 49%;">
                    <label>Danh Mục</label>
                    <select class="form-control" name="menu_id" id="">
                        <option>Danh mục cha</option>
                        @foreach ($menu as $item)
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row" style="position: relative; margin:0 1px 85px 1px">
                <div class="form-group" style="position: absolute;
                width: 49%;">
                    <label for="menu">Giá bán</label>
                    <input type="number" value="{{old('price_sale')}}" name="price_sale" class="form-control" id="price_sale" placeholder="Nhập giá gốc">
                </div>
                <div class="form-group" style="position: absolute;
                float: right;
                right: 0%;
                width: 49%;">
                    <label>Giá gốc</label>
                    <input type="number" name="price" value="{{old('price')}}" class="form-control" id="price" placeholder="Nhập giá bán">
                </div>
            </div>

            <div class="form-group">
                <label>Mô tả</label>
                <textarea type="text" name="description" value="{{old('description')}}" class="form-control" id="description" rows="10" placeholder="Nhập mô tả"></textarea>
            </div>

            <div class="form-group">
                <label>Mô tả chi tiết</label>
                <textarea type="text" name="content" value="{{old('content')}}" class="form-control" id="content" rows="4" placeholder="Chi tiết"></textarea>
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" class="form-control" id="upload">
                <div id="image_show">
                    
                </div>
                <input type="hidden" value="{{old('thumb')}}" name="thumb" id="thumb">
            </div>

            <div class="form-group">
                <label for="">Kích hoạt</label>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" name="active" id="active" checked>
                    <label for="active" class="form-check-label">Có</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio" name="active">
                    <label for="no_active" class="form-check-label">Không</label>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo Sản Phẩm</button>
        </div>
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>

    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
