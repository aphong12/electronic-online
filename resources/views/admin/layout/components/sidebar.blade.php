
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ set_active(['home']) }}">
                    <a href="{{ url('/home') }}"><img src="{{ asset('admin/assets/img/icons/dashboard.svg') }}" alt="img"><span> Dashboard</span> </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="admin/assets/img/icons/product.svg" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="productlist.html">Product List</a></li>
                        <li><a href="addproduct.html">Add Product</a></li>
                        <li><a href="categorylist.html">Category List</a></li>
                        <li><a href="addcategory.html">Add Category</a></li>
                        <li><a href="subcategorylist.html">Sub Category List</a></li>
                        <li><a href="subaddcategory.html">Add Sub Category</a></li>
                        <li><a href="brandlist.html">Brand List</a></li>
                        <li><a href="addbrand.html">Add Brand</a></li>
                        <li><a href="importproduct.html">Import Products</a></li>
                        <li><a href="barcode.html">Print Barcode</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('admin/assets/img/icons/expense1.svg') }}" alt="img"><span> Expense</span> <span class="menu-arrow active"></span></a>
                    <ul>
                        <li><a href="{{ route('categories.index') }}" class="{{ set_active(['admin/categories']) }}">Expense List</a></li>
                        <li><a href="{{ route('categories.create') }}" class="{{ set_active(['admin/categories/create']) }}">Add Expense</a></li>
                        <li><a href="expensecategory.html">Expense Category</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>

