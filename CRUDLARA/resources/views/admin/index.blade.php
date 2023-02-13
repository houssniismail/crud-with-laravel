@extends('admin.layout')
@section('content')
 <div class="container">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h2>Laravel 9 CRUD (creat, Read, Update and Delete)</h2>
               </div>
               <div class="cart-body">
                  <a href="{{url('/admin/create')}}" class="btn btn-success btn-sm" title="Add new student">
                     Add New
                  </a>
                  <br/>
                  <br/>
                  <div class="table-responsive">
                      <table class="table">
                            <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>password</th>
                                  <th>email</th>
                                  <th>action</th>
                              </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>ismail</td>
                                    <td>12345</td>
                                    <td>houssniismail6@gmail.com</td>
                                    <td>
                                       <a href="" title="View stedent"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> view</button></a>
                                       <a href="" title="edet student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>edet</button></a>
                                       <a href="" title="Delete student"><button class="btn btn-danger btn-sm" ><i class="fa fa-pencil-square-o" aria-hidden="true"> </i>Delete</button></a>
                                    </td>
                                 </tr>
                            </tbody>
                      </table>
                  </div>
               </div>
            </div>
        </div>   
    </div>
 </div>
@endsection