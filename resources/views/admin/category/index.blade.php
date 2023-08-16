@extends('admin.layout.layout')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Expenses LIST </h4>
                <h6>Manage your purchases</h6>
            </div>
            <div class="page-btn">
                <a href="createexpense.html" class="btn btn-added"><img src="{{ asset('admin/assets/img/icons/plus.svg') }}" class="me-2" alt="img">Add New Expense</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="{{ asset('admin/assets/img/icons/filter.svg') }}" alt="img">
                                <span><img src="{{ asset('admin/assets/img/icons/closes.svg') }}" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset">
                                <img src="{{ asset('admin/assets/img/icons/search-white.svg') }}" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ asset('admin/assets/img/icons/pdf.svg') }}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ asset('admin/assets/img/icons/excel.svg') }}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ asset('admin/assets/img/icons/printer.svg') }}" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all">
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Category name</th>
                            <th>Alisa </th>
                            <th>Parent</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td scope="row">{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->parentCategory?->name }}</td>
                                <td>
                                    <a href="#" data-visbility="{{ $category->is_active  }}" class="change-status">
                                        @if($category->is_active)
                                            <a class="btn btn-outline-success"> <i class="fa-regular fa-eye"></i></a>
                                        @else
                                            <i class="fa-regular fa-eye-slash"></i>
                                        @endif
                                    </a>
                                </td>

                                <td>{{ $category->created_at }}</td>
                                <td>
                                    <a class="me-3" href="editexpense.html">
                                        <a class="btn btn-outline-primary"><img src="{{ asset('admin/assets/img/icons/edit.svg') }}" alt="img"></a>
                                    </a>
                                    <a class="me-3 confirm-text" href="javascript:void(0);">
                                        <a class="btn btn-outline-danger"><img src="{{ asset('admin/assets/img/icons/delete.svg') }}" alt="img"></a>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
