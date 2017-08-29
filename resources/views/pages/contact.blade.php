@extends('main')
@section('title','-Content')
@section('content')
        <div class="row">
            <div class="col-md-12">
               <h1>Contact Me</h1>
               <form action="">
                <div class="form-group">
                    <lable name="email">Email: </lable>
                    <input id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <lable name="email">Subject: </lable>
                    <input id="subject" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <lable name="email">Message: </lable>
                    <textarea id="message" name="message" class="form-control">1</textarea>
                </div>
               </form>
               <input type="submit" value="Send Message" class="btn btn-success">
            </div>
        </div>
@endsection

       
    