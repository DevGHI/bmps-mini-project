@extends('dashboard.layouts.master')

@section('css')
      <link rel="stylesheet" href="{{url('dashboard/assets/css/blog-list.css')}}"/>
@endsection


@section('content')

    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-clipboard bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Blog Create Lists</h5>
                            <span
                            >lorem ipsum dolor sit amet, consectetur adipisicing
                          elit</span
                            >
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html"
                                ><i class="feather icon-home"></i
                                    ></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Blog Create Lists</a>
                            </li>
                            <!-- <li class="breadcrumb-item">
                              <a href="#!">Forms Validation</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Total Blog Lists</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="multi-colum-dt"
                                                   class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th>Author</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Main Category</th>
                                                    <th>Sub Category</th>
                                                    <th>Create Start Date</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>IT Yan Tote</td>
                                                    <td>အာလာဝက</td>
                                                    <td>
                                                        <div class="blog-img">
                                                            <img
                                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRAksaOoswBfolnOk2FJaki_gm6-E96J06bxulJql1yGGm8D7-cpG28bQ4XQZqzAJxf6k&usqp=CAU"
                                                                alt="">
                                                        </div>
                                                    </td>
                                                    <td>မဟာရာဇဝင်</td>
                                                    <td>ဘီလူး</td>
                                                    <td>12 / 11 / 2021</td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Author</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Main Category</th>
                                                    <th>Sub Category</th>
                                                    <th>Create Start Date</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
