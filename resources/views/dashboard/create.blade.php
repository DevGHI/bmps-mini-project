@extends('dashboard.layouts.master')





@section('content')

<div class="pcoded-content">
    <div class="page-header card">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <div class="page-header-title">
            <i class="feather icon-clipboard bg-c-blue"></i>
            <div class="d-inline">
              <h5>Create Forms</h5>
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
                <a href="#!">Blog Create</a>
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
            <form
            class="mb-0">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>Blog Create Form</h5>
                    </div>
                      <div class="card-block"><div class="row">
                            <div class="col-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"
                                  >Author</label
                                >
                                <div class="col-sm-9">
                                  <div style="position: relative">
                                    <button
                                      style="
                                        position: absolute;
                                        top: -50px;
                                        right: 0;
                                      "
                                      type="button"
                                      class="
                                        btn btn-outline-primary
                                        mb-2
                                        px-3
                                        py-2
                                        rounded
                                      "
                                      data-toggle="modal" data-target="#createAuthor"
                                    >
                                      Create Author
                                    </button>
                                    <!-- author create modal start -->
                                    <div class="modal fade" id="createAuthor" tabindex="-1" aria-labelledby="AuthorModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                           <form action="">
                                              <div class="modal-header">
                                                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Create Author</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="form-group mb-0">
                                                  <label for="authorName">Author Name :</label>
                                                  <input type="text" class="form-control" id="authorName">
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                              </div>
                                           </form>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- author create modal end -->
                                    <select
                                      class="
                                        js-example-data-array
                                        col-sm-12
                                      "
                                    ></select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label
                                  for="title"
                                  class="col-sm-3 col-form-label"
                                  >Title</label
                                >
                                <div class="col-sm-9">
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="title"
                                    placeholder="Title input"
                                  />
                                  <span class="messages"></span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"
                                  >Photo</label
                                >
                                <div class="col-sm-9">
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="avatar-upload">
                                        <div class="avatar-edit">
                                          <input
                                            type="file"
                                            id="imageUpload"
                                            accept=".png, .jpg, .jpeg"
                                          />
                                          <label
                                            for="imageUpload"
                                          ></label>
                                        </div>
                                        <div class="avatar-preview">
                                          <div
                                            id="imagePreview"
                                            style="
                                              background-image: url(http://i.pravatar.cc/500?img=7);
                                            "
                                          ></div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- upload Image end -->
                                  </div>
                                  <span class="messages"></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"
                                  >Main Categories</label
                                >
                                <div class="col-sm-8 pr-0">
                                  <select
                                    name=""
                                    id=""
                                    class="custom-select"
                                  >
                                    <option value="#" selected>
                                      Category 1
                                    </option>
                                    <option value="#">Category 2</option>
                                    <option value="#">Category 3</option>
                                    <option value="#">Category 4</option>
                                  </select>
                                  <span class="messages"></span>
                                </div>
                                <div class="col-sm-1">
                                  <button
                                    class="
                                      w-100
                                      btn btn-outline-primary
                                      rounded
                                      p-0
                                    "
                                    style="cursor: pointer; height: 36px"
                                    type="button"
                                    title="create main category"
                                    data-toggle="modal" data-target="#createMainCate"
                                  >
                                    <i class="ti-plus"></i>
                                  </button>
                                  <!-- main category create modal start -->
                                  <div class="modal fade" id="createMainCate" tabindex="-1" aria-labelledby="mainCateModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                         <form action="">
                                            <div class="modal-header">
                                              <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Create Main Category</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="form-group mb-0">
                                                <label for="authorName">Main Category Name:</label>
                                                <input type="text" class="form-control" id="authorName">
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                         </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!--main category create modal end -->
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3"
                                  >Sub Categories</label
                                >
                                <div class="col-sm-8">
                                  <div
                                    class="checkbox-fade fade-in-primary"
                                  >
                                    <label>
                                      <input
                                        type="checkbox"
                                        id="checkbox"
                                        name="Language"
                                        value="HTML"
                                      />
                                      <span class="cr">
                                        <i
                                          class="
                                            cr-icon
                                            icofont icofont-ui-check
                                            txt-primary
                                          "
                                        ></i>
                                      </span>
                                      <span>Sub Category 1</span>
                                    </label>
                                  </div>
                                  <div
                                    class="checkbox-fade fade-in-primary"
                                  >
                                    <label>
                                      <input
                                        type="checkbox"
                                        id="checkbox2"
                                        name="Language"
                                        value="CSS"
                                      />
                                      <span class="cr">
                                        <i
                                          class="
                                            cr-icon
                                            icofont icofont-ui-check
                                            txt-primary
                                          "
                                        ></i>
                                      </span>
                                      <span>Sub Category 2</span>
                                    </label>
                                  </div>
                                  <div
                                    class="checkbox-fade fade-in-primary"
                                  >
                                    <label>
                                      <input
                                        type="checkbox"
                                        id="checkbox2"
                                        name="Language"
                                        value="CSS"
                                      />
                                      <span class="cr">
                                        <i
                                          class="
                                            cr-icon
                                            icofont icofont-ui-check
                                            txt-primary
                                          "
                                        ></i>
                                      </span>
                                      <span>Sub Category 3</span>
                                    </label>
                                  </div>
                                  <div
                                    class="checkbox-fade fade-in-primary"
                                  >
                                    <label>
                                      <input
                                        type="checkbox"
                                        id="checkbox2"
                                        name="Language"
                                        value="CSS"
                                      />
                                      <span class="cr">
                                        <i
                                          class="
                                            cr-icon
                                            icofont icofont-ui-check
                                            txt-primary
                                          "
                                        ></i>
                                      </span>
                                      <span>Sub Category 4</span>
                                    </label>
                                  </div>
                                  <div
                                    class="checkbox-fade fade-in-primary"
                                  >
                                    <label>
                                      <input
                                        type="checkbox"
                                        id="checkbox2"
                                        name="Language"
                                        value="CSS"
                                      />
                                      <span class="cr">
                                        <i
                                          class="
                                            cr-icon
                                            icofont icofont-ui-check
                                            txt-primary
                                          "
                                        ></i>
                                      </span>
                                      <span>Sub Category 5</span>
                                    </label>
                                  </div>
                                  <div
                                    class="checkbox-fade fade-in-primary"
                                  >
                                    <label>
                                      <input
                                        type="checkbox"
                                        id="checkbox2"
                                        name="Language"
                                        value="CSS"
                                      />
                                      <span class="cr">
                                        <i
                                          class="
                                            cr-icon
                                            icofont icofont-ui-check
                                            txt-primary
                                          "
                                        ></i>
                                      </span>
                                      <span>Sub Category 6</span>
                                    </label>
                                  </div>
                                  <span class="messages"></span>
                                </div>
                                <div class="col-sm-1">
                                  <button
                                    class="
                                      w-100
                                      btn btn-outline-primary
                                      rounded
                                      p-0
                                    "
                                    style="cursor: pointer; height: 36px"
                                    type="button"
                                    title="create sub category"
                                    data-toggle="modal" data-target="#createSubCate"
                                  >
                                    <i class="ti-plus"></i>
                                  </button>
                                  <!-- sub category create modal start -->
                                  <div class="modal fade" id="createSubCate" tabindex="-1" aria-labelledby="subCateModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                         <form action="">
                                            <div class="modal-header">
                                              <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Create Main Category</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="authorName">Select Main Category:</label>
                                                <select name="" id="" class="custom-select">
                                                    <option value="#" disabled selected>Choose Category</option>
                                                    <option value="#">Category 1</option>
                                                    <option value="#">Category 2</option>
                                                    <option value="#">Category 3</option>
                                                    <option value="#">Category 4</option>
                                                </select>
                                              </div>
                                              <div class="form-group mb-0">
                                                <label for="authorName">Sub Category Name:</label>
                                                <input type="text" class="form-control" id="authorName">
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                         </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!--sub category create modal end -->
                                </div>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                   <div class="card">
                     <div class="card-header">
                      <h5>Description</h5>
                     </div>
                     <div class="card-block">
                       <div>
                          <div id="summernote"></div>
                       </div>
                      <button
                          type="submit"
                          class="btn btn-primary m-b-0 float-right"
                        >
                          Submit
                    </button>
                     </div>

                   </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
