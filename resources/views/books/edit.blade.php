@extends('layout',['title'=>'Create'])

    @section('page-content')

    <form method="post" action="{{route('books.update')}}">
        @csrf
        
        <input type="hidden" name="id" value="{{$book->id}}">

        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title',$book->title)}}">

            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror

          </div>

          <div class="mb-3">
            <label  class="form-label">Author</label>
            <input type="text" class="form-control" name="author" placeholder="Author" value="{{old('author',$book->author)}}">
            @error('author')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label  class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn" placeholder="ISBN" value="{{old('isbn',$book->isbn)}}">

            @error('isbn')
            <div class="text-danger">{{ $message }}</div>
            @enderror

          </div>

          <div class="mb-3">
            <label  class="form-label">Stock</label>
            <input type="text" class="form-control" name="stock" placeholder="Stock" value="{{old('stock',$book->stock)}}">

            @error('stock')
            <div class="text-danger">{{ $message }}</div>
            @enderror

          </div>

          <div class="mb-3">
            <label  class="form-label">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Price"  value="{{old('price',$book->price)}}">

            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror


          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('books.index')}}" class="btn btn-danger">Back</a>
          </div>



    </form>

    @endsection
