@extends('layouts.app3')

@section('content')
<H1><U>YOUR PROFILE</U></H1>
<h1>Name:  {!! Auth::user()->name !!}</h1>
<h1>Email: {{ Auth::user()->email }}</h1>
<h1>Aadhar no:  {{ Auth::user()->aadhar }}</h1>
<?php $x=Auth::user()->phone;  ?>
<h1>Police number: {{ $x }}</h1>
 <?php $y=Auth::user()->id;?>


<h1>id: {{ $y }}</h1>

<h1>Police number: {{ Auth::user()->phone }}</h1>





@endsection
