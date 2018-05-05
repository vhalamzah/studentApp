@extends('layouts.app')

@section('title','| view universities')

@section('content')
<div class = "row">
       <div class="col-md-8">
          <h1> University</h1>
          <table class="table">
            <thead>
               <tr>
                 <th>#</th>
                 <th>Name</th>
                 <th>nickname</th>
                 <th>province</th>
                 <th></th>
                </tr>
             </thead>
              <tbody>
                 @foreach($universities as $university)
                   <tr>
                     <td>{{$university->id}}</td>
                     <td>{{$university->name}}</td>
                     <td>{{$university->nickname}}</td>
                     <td>{{$university->province}}</td>

                     <td>
                      <a href="#" class="btn btn-default btn-md">View</a>
                      <a href="#"  class="btn btn-default btn-md ">Edit</a>
                     </td>
                   </tr>
                 @endforeach
              </tbody>
           </table>
       </div>
       <div class="col-md-3">
         <div class="well">
              {!!  Form::open(['route'=> 'university.store', 'method'=>'POST']) !!}
               <h2>New University</h2> 
                {{Form::label('name', 'Name:')}} 
                {{Form:: text('name', null, ['class'=> 'form-control  '])}} 

                {{Form::label('nickname', 'Nickname:')}} 
                {{Form:: text('nickname', null, ['class'=> 'form-control '])}}

                {{Form::label('province', 'Province:')}} 
                {{Form:: text('province', null, ['class'=> 'form-control '])}} 


  
              {{Form::submit('Create New University', ['class'=>'btn btn-primary btn-block createBtn'])}}
               {!! Form::close() !!}
  </div>
</div>

     </div>

@endsection