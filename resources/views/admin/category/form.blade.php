
@extends('admin.layout.layout')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Expense Add</h4>
                <h6>Add/Update Expenses</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-6 col-sm-6 col-6">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-groupicon">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-6">
                        <div class="form-group">
                            <label>Parent Category</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="is_active" type="checkbox" role="switch" id="is_active" {{ !isset($category) || $category->is_active ? 'checked' : ''}}>
                            <label class="form-check-label" for="is_active">Status</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                        <a href="expenselist.html" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
