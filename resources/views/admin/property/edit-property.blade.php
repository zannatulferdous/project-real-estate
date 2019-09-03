
@extends('admin.master')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        @if(Session::get('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @else
                        @endif
                        <h4 class="card-title">Edit Property</h4>
                        {{Form::open(['route'=>'update-property','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editPropertyForm'])}}

                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->Category_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('category_id')? $errors->first('category_id'):''}}</span>
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Property Name</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="property_name" id="email1" value="{{$property->property_name}}">
                                    <input type="hidden" class="form-control" name="id" id="email1" value="{{$property->id}}">
                                    <span class="text-danger">{{$errors->has('property_name')? $errors->first('property_name'):''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Property Type</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="property_type" id="email1" value="{{$property->property_type}}">
                                    <span class="text-danger">{{$errors->has('property_type')? $errors->first('property_type'):''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Property price</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="property_price" id="email1" value="{{$property->property_price}}">
                                    <span class="text-danger">{{$errors->has('property_price')? $errors->first('property_price'):''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">City</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="property_city" id="email1" value="{{$property->property_city}}">
                                    <span class="text-danger">{{$errors->has('property_city')? $errors->first('property_city'):''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Area</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="property_area" id="email1" value="{{$property->property_area}}">
                                    <span class="text-danger">{{$errors->has('property_area')? $errors->first('property_area'):''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Bedroom</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="property_bedroom" id="email1" value="{{$property->property_bedroom}}">
                                    <span class="text-danger">{{$errors->has('property_bedroom')? $errors->first('property_bedroom'):''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Bathroom</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="property_bathroom" id="email1" value="{{$property->property_bathroom}}">
                                    <span class="text-danger">{{$errors->has('property_bathroom')? $errors->first('property_bathroom'):''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Balcony</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="property_balcony" id="email1" value="{{$property->property_balcony}}">
                                    <span class="text-danger">{{$errors->has('property_balcony')? $errors->first('property_balcony'):''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label"> Square Feet</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="square_feet" id="email1" value="{{$property->square_feet}}" >
                                    <span class="text-danger">{{$errors->has('square_feet')? $errors->first('square_feet'):''}}</span>
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">property Short Description</label>
                            <div class="col-sm-7">
                                <textarea rows="2" class="form-control"name="short_description" >{{$property->short_description}}</textarea>
                                <span class="text-danger">{{$errors->has('short_description')? $errors->first('short_description'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">property Long Description</label>
                            <div class="col-sm-7">
                                <textarea rows="5" id="article-ckeditor" class="form-control" name="long_description">{{$property->long_description}}</textarea>
                                <span class="text-danger">{{$errors->has('long_description')? $errors->first('long_description'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Property Image</label>
                            <div class="col-sm-7">
                                <input type="file" class="form-control" name="property_image" value="{{$property->property_image}}">
                                <span class="text-danger">{{$errors->has('property_image')? $errors->first('property_image'):''}}</span>
                                <img src="{{asset($property->property_image)}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 text-right control-label ">Publication Status</label>
                            <div class="col-sm-7">
                                <input  type="radio"  name="publication_status" value="1" {{$property->publication_status==1?'checked':''}}>Published
                                <input  type="radio"  name="publication_status" value="0" {{$property->publication_status==0?'checked':''}}>unpublished
                                <br>
                                <span class="text-danger">{{$errors->has('publication_status')? $errors->first('publication_status'):''}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit"  name="btn" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    {{Form::close()}}
                </div>

            </div>

        </div>
        <!-- editor -->
    </div>
<script>
    document.forms['editPropertyForm'].elements['category_id'].value='{{$property->category_id}}';
</script>
@endsection
