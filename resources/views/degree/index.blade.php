@extends('layouts.app')

@section('title','| view degrees')

@section('content')
<div class = "row">
       <div class="col-md-8">
          <h1> Degree</h1>
          <table class="table">
            <thead>
               <tr>
                 <th>#</th>
                 <th>Name</th>
                 <th>mimimum_points</th>
                 <th>financial_aid</th>
                 <th></th>
                </tr>
             </thead>
              <tbody>
                 @foreach($degrees as $degree)
                   <tr>
                     <td>{{$degree->id}}</td>
                     <td>{{$degree->name}}</td>
                     <td>{{$degree->mimimum_points}}</td>
                     <td>{{$degree->financial_aid}}</td>
                     <td>{{$degree->duration}}</td>

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
              {!!  Form::open(['route'=> 'degree.store', 'method'=>'POST']) !!}
               <h2>New Degree</h2> 
                {{Form::label('name', 'Name:')}} 
                {{Form:: text('name', null, ['class'=> 'form-control  '])}} 

                {{Form::label('mimimum_points', 'Mimimum_points:')}} 
                {{Form:: text('mimimum_points', null, ['class'=> 'form-control '])}}

                {{Form::label('financial_aid', 'Financial_aid:')}} 
                <select name="financial_aid" class="form-control">
                   <option value="true"> True</option>
                   <option value="false">False</option>                          
                 </select>

    
               
                {{Form::label('duration', 'duration:')}} 
                {{Form:: text('duration', null, ['class'=> 'form-control '])}}


  
              {{Form::submit('Create New degree', ['class'=>'btn btn-primary btn-block createBtn'])}}
               {!! Form::close() !!}
  </div>
</div>

     </div>

@endsection