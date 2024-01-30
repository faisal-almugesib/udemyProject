@extends('layouts.master')

@section('content')

<h1>Index page</h1>

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            All Posts

            <a class="btn btn-success" href="">Create</a>
            <a class="btn btn-warning" href="">Trashed</a>
        </div>
    
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" >#</th>
                    <th scope="col" style="width: 10%">Image</th>
                    <th scope="col" style="width: 20%">Title</th>
                    <th scope="col" style="width: 30%">Description</th>
                    <th scope="col" style="width: 10%">Category</th>
                    <th scope="col" style="width: 10%">Publish Date</th>
                    <th scope="col" style="width: 20%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="col">1</th>
                    <td scope="col">
                        <img src="https://picsum.photos/200" alt="" width="80">
                    </td>
                    <td scope="col">Lorem ipsum dolor sit amet </td>
                    <td scope="col">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni assumenda ad mollitia quo maxime saepe,
                        aspernatur pariatur in tenetur, nesciunt inventore nobis alias nostrum recusandae quasi, aut facilis minus necessitatibus.</td>
                    <td scope="col">News</td>
                    <td scope="col">31-1-24</td>
                    <td scope="col">
                        <a class="btn-sm btn-primary" href="">Edit</a>
                        <a class="btn-sm btn-danger" href="">Delete</a>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
    
    </div>
</div>


@endsection