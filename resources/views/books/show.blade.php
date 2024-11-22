@extends('layout')
    @section('page-content')

		<p>
        <a href="{{url('books/')}}"> Back </a>
    </p>
    
    <h2>Book List</h2>
    <table width="25%" border="2">
        <tr>
            <th>ID </th>
            <td>{{$book->id}}</td>
        </tr>

        <tr>
            <th>Title </th>
            <td>{{$book->title}}</td>
        </tr>

        <tr>
            <th>Author</th>
            <td>{{$book->author}}</td>
        </tr>


        <tr>
            <th>ISBN </th>
            <td>{{$book->isbn}}</td>
        </tr>


        <tr>
            <th>Stock </th>
            <td>{{$book->stock}}</td>
        </tr>


        <tr>
            <th>Price</th>
            <td>{{$book->price}}</td>
        </tr>


    </table>

</body>
</html>
@endsection