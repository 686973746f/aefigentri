@extends('layouts.app')

@section('content')
    <form action="" method="POST">
        <div class="container">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="priority_group">Priority Group</label>
                                <select class="form-control" name="priority_group" id="priority_group">
                                    <option value="" disabled {{is_null(old('priority_group')) ? 'selected' : ''}}>Choose...</option>
                                    <option value="A1">A1</option>
                                    <option value="A2">A2</option>
                                    <option value="A3">A3</option>
                                    <option value="A4">A4</option>
                                    <option value="A5">A5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="is_pwd">Are you a Person With Disability?</label>
                                <select class="form-control" name="is_pwd" id="is_pwd">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                <option></option>
                              </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="is_indigenous">Are you an Indigent?</label>
                                <select class="form-control" name="is_indigenous" id="is_indigenous">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                <option></option>
                              </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection