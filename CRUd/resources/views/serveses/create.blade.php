@extends('serveses.layout.index')

@section('content')

<div>
    <div>Create servece</div>
    <form action="{{ url('serves') }}" method="post">
        @csrf
        <div>
            <label for="">name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">image</label>
            <input type="text" name="image">
        </div>
        <div>
            <label for="">name_of_create</label>
            <input type="text" name="name_of_create">
        </div>
        <div>
            <label for="">category</label>
            <input type="text" name="category">
        </div>
        <div>
            <label for="">date_creation</label>
            <input type="text" name="date_creation">
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>
</div>
@stop