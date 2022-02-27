<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from colorlib.com/polygon/admindek/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:14 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <title>Blog Create Form</title>

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs."
    />
    <meta
      name="keywords"
      content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive"
    />
    <meta name="author" content="colorlib" />

    <link
      rel="icon"
      href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico"
      type="image/x-icon"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Quicksand:500,700"
      rel="stylesheet"
    />
   <!-- summer note -->
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/bootstrap.min.css')}}" />
    <link
      rel="stylesheet"
      href="{{url('dashboard/css/waves.min.css')}}"
      type="text/css"
      media="all"
    />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/feather.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/sweetalert.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/themify-icons.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/icofont.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/component.css')}}" />
    <link rel="stylesheet" href="{{url('dashboard/css/select2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('dashboard/css/pages.css')}}" />

    <!-- custom css -->
    <link rel="stylesheet" href="{{url('dashboard/assets/css/style.css')}}" />
  </head>
  <body>
    <div class="loader-bg">
      <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
          <div class="navbar-wrapper">
            <div class="navbar-logo">
              <a href="index.html">
                <img class="img-fluid" src="{{url('dashboard/png/logo.png')}}" alt="Theme-Logo" />
              </a>
              <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu icon-toggle-right"></i>
              </a>
              <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
              </a>
            </div>
            <div class="navbar-container container-fluid">
              <ul class="nav-left">
                <li class="header-search">
                  <div class="main-search morphsearch-search">
                    <div class="input-group">
                      <span class="input-group-prepend search-close">
                        <i class="feather icon-x input-group-text"></i>
                      </span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter Keyword"
                      />
                      <span class="input-group-append search-btn">
                        <i class="feather icon-search input-group-text"></i>
                      </span>
                    </div>
                  </div>
                </li>
                <li>
                  <a
                    href="#!"
                    onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                    class="waves-effect waves-light"
                    data-cf-modified-9fef68816305b81b29a5d613-=""
                  >
                    <i class="full-screen feather icon-maximize"></i>
                  </a>
                </li>
              </ul>
              <ul class="nav-right">
                <li class="header-notification">
                  <div class="dropdown-primary dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      <i class="feather icon-bell"></i>
                      <span class="badge bg-c-red">5</span>
                    </div>
                    <ul
                      class="show-notification notification-view dropdown-menu"
                      data-dropdown-in="fadeIn"
                      data-dropdown-out="fadeOut"
                    >
                      <li>
                        <h6>Notifications</h6>
                        <label class="label label-danger">New</label>
                      </li>
                      <li>
                        <div class="media">
                          <img
                            class="img-radius"
                            src="{{url('dashboard/jpg/avatar-4.jpg')}}"
                            alt="Generic placeholder image"
                          />
                          <div class="media-body">
                            <h5 class="notification-user">John Doe</h5>
                            <p class="notification-msg">
                              Lorem ipsum dolor sit amet, consectetuer elit.
                            </p>
                            <span class="notification-time"
                              >30 minutes ago</span
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <img
                            class="img-radius"
                            src="{{url('dashboard/jpg/avatar-3.jpg')}}"
                            alt="Generic placeholder image"
                          />
                          <div class="media-body">
                            <h5 class="notification-user">Joseph William</h5>
                            <p class="notification-msg">
                              Lorem ipsum dolor sit amet, consectetuer elit.
                            </p>
                            <span class="notification-time"
                              >30 minutes ago</span
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <img
                            class="img-radius"
                            src="{{url('dashboard/jpg/avatar-4.jpg')}}"
                            alt="Generic placeholder image"
                          />
                          <div class="media-body">
                            <h5 class="notification-user">Sara Soudein</h5>
                            <p class="notification-msg">
                              Lorem ipsum dolor sit amet, consectetuer elit.
                            </p>
                            <span class="notification-time"
                              >30 minutes ago</span
                            >
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="header-notification">
                  <div class="dropdown-primary dropdown">
                    <div
                      class="displayChatbox dropdown-toggle"
                      data-toggle="dropdown"
                    >
                      <i class="feather icon-message-square"></i>
                      <span class="badge bg-c-green">3</span>
                    </div>
                  </div>
                </li>
                <li class="user-profile header-notification">
                  <div class="dropdown-primary dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      <img
                        src="{{url('dashboard/jpg/avatar-4.jpg')}}"
                        class="img-radius"
                        alt="User-Profile-Image"
                      />
                      <span>John Doe</span>
                      <i class="feather icon-chevron-down"></i>
                    </div>
                    <ul
                      class="
                        show-notification
                        profile-notification
                        dropdown-menu
                      "
                      data-dropdown-in="fadeIn"
                      data-dropdown-out="fadeOut"
                    >
                      <li>
                        <a href="#!">
                          <i class="feather icon-settings"></i> Settings
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="feather icon-user"></i> Profile
                        </a>
                      </li>
                      <li>
                        <a href="email-inbox.html">
                          <i class="feather icon-mail"></i> My Messages
                        </a>
                      </li>
                      <li>
                        <a href="auth-lock-screen.html">
                          <i class="feather icon-lock"></i> Lock Screen
                        </a>
                      </li>
                      <li>
                        <a href="auth-sign-in-social.html">
                          <i class="feather icon-log-out"></i> Logout
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div id="sidebar" class="users p-chat-user showChat">
          <div class="had-container">
            <div class="p-fixed users-main">
              <div class="user-box">
                <div class="chat-search-box">
                  <a class="back_friendlist">
                    <i class="feather icon-x"></i>
                  </a>
                  <div class="right-icon-control">
                    <div class="input-group input-group-button">
                      <input
                        type="text"
                        id="search-friends"
                        name="footer-email"
                        class="form-control"
                        placeholder="Search Friend"
                      />
                      <div class="input-group-append">
                        <button
                          class="btn btn-primary waves-effect waves-light"
                          type="button"
                        >
                          <i class="feather icon-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="main-friend-list">
                  <div
                    class="media userlist-box waves-effect waves-light"
                    data-id="1"
                    data-status="online"
                    data-username="Josephin Doe"
                  >
                    <a class="media-left" href="#!">
                      <img
                        class="media-object img-radius img-radius"
                        src="{{url('dashboard/jpg/avatar-3.jpg')}}"
                        alt="Generic placeholder image "
                      />
                      <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                      <div class="chat-header">Josephin Doe</div>
                    </div>
                  </div>
                  <div
                    class="media userlist-box waves-effect waves-light"
                    data-id="2"
                    data-status="online"
                    data-username="Lary Doe"
                  >
                    <a class="media-left" href="#!">
                      <img
                        class="media-object img-radius"
                        src="{{url('dashboard/jpg/avatar-2.jpg')}}"
                        alt="Generic placeholder image"
                      />
                      <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                      <div class="f-13 chat-header">Lary Doe</div>
                    </div>
                  </div>
                  <div
                    class="media userlist-box waves-effect waves-light"
                    data-id="3"
                    data-status="online"
                    data-username="Alice"
                  >
                    <a class="media-left" href="#!">
                      <img
                        class="media-object img-radius"
                        src="{{url('dashboard/jpg/avatar-4.jpg')}}"
                        alt="Generic placeholder image"
                      />
                      <div class="live-status bg-success"></div>
                    </a>
                    <div class="media-body">
                      <div class="f-13 chat-header">Alice</div>
                    </div>
                  </div>
                  <div
                    class="media userlist-box waves-effect waves-light"
                    data-id="4"
                    data-status="offline"
                    data-username="Alia"
                  >
                    <a class="media-left" href="#!">
                      <img
                        class="media-object img-radius"
                        src="{{url('dashboard/jpg/avatar-3.jpg')}}"
                        alt="Generic placeholder image"
                      />
                      <div class="live-status bg-default"></div>
                    </a>
                    <div class="media-body">
                      <div class="f-13 chat-header">
                        Alia<small class="d-block text-muted">10 min ago</small>
                      </div>
                    </div>
                  </div>
                  <div
                    class="media userlist-box waves-effect waves-light"
                    data-id="5"
                    data-status="offline"
                    data-username="Suzen"
                  >
                    <a class="media-left" href="#!">
                      <img
                        class="media-object img-radius"
                        src="{{url('dashboard/jpg/avatar-2.jpg')}}"
                        alt="Generic placeholder image"
                      />
                      <div class="live-status bg-default"></div>
                    </a>
                    <div class="media-body">
                      <div class="f-13 chat-header">
                        Suzen<small class="d-block text-muted"
                          >15 min ago</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="showChat_inner">
          <div class="media chat-inner-header">
            <a class="back_chatBox">
              <i class="feather icon-x"></i> Josephin Doe
            </a>
          </div>
          <div class="main-friend-chat">
            <div class="media chat-messages">
              <a class="media-left photo-table" href="#!">
                <img
                  class="media-object img-radius img-radius m-t-5"
                  src="{{url('dashboard/jpg/avatar-2.jpg')}}"
                  alt="Generic placeholder image"
                />
              </a>
              <div class="media-body chat-menu-content">
                <div class="">
                  <p class="chat-cont">
                    I'm just looking around. Will you tell me something about
                    yourself?
                  </p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
              </div>
            </div>
            <div class="media chat-messages">
              <div class="media-body chat-menu-reply">
                <div class="">
                  <p class="chat-cont">Ohh! very nice</p>
                </div>
                <p class="chat-time">8:22 a.m.</p>
              </div>
            </div>
            <div class="media chat-messages">
              <a class="media-left photo-table" href="#!">
                <img
                  class="media-object img-radius img-radius m-t-5"
                  src="{{url('dashboard/jpg/avatar-2.jpg')}}"
                  alt="Generic placeholder image"
                />
              </a>
              <div class="media-body chat-menu-content">
                <div class="">
                  <p class="chat-cont">can you come with me?</p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
              </div>
            </div>
          </div>
          <div class="chat-reply-box">
            <div class="right-icon-control">
              <div class="input-group input-group-button">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Write hear . . "
                />
                <div class="input-group-append">
                  <button
                    class="btn btn-primary waves-effect waves-light"
                    type="button"
                  >
                    <i class="feather icon-message-circle"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">
            <nav class="pcoded-navbar">
              <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                  <div class="pcoded-navigation-label">Navigation</div>
                  <ul class="pcoded-item pcoded-left-item">
                    <!-- <li class="pcoded-hasmenu">
                      <a
                        href="javascript:void(0)"
                        class="waves-effect waves-dark"
                      >
                        <span class="pcoded-micon"
                          ><i class="feather icon-home"></i
                        ></span>
                        <span class="pcoded-mtext">Dashboard</span>
                      </a>
                      <ul class="pcoded-submenu">
                        <li class="">
                          <a href="index.html" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Default</span>
                          </a>
                        </li>
                        <li class="">
                          <a
                            href="dashboard-crm.html"
                            class="waves-effect waves-dark"
                          >
                            <span class="pcoded-mtext">CRM</span>
                          </a>
                        </li>
                        <li class="">
                          <a
                            href="dashboard-analytics.html"
                            class="waves-effect waves-dark"
                          >
                            <span class="pcoded-mtext">Analytics</span>
                            <span class="pcoded-badge label label-info"
                              >NEW</span
                            >
                          </a>
                        </li>
                      </ul>
                    </li> -->
                    <li class="active">
                      <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-clipboard"></i>
                        </span>
                        <span class="pcoded-mtext">Blog Create</span>
                      </a>
                    </li>
                    <li class="">
                      <a href="blog-list.html" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-menu"></i>
                        </span>
                        <span class="pcoded-mtext">Total Blog List</span>
                      </a>
                    </li>
                    <li class="">
                      <a href="our-blog.html" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                          <i class="feather icon-feather"></i>
                        </span>
                        <span class="pcoded-mtext">Our Blog</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

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

            <div id="styleSelector"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- <script type="88add89075ed2b878b934720-text/javascript" src="{{url('dashboard/js/jquery.min.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- summer note -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <!-- -----------------------------Custom Js ------------------------------------ -->
    <script src="{{url('dashboard/assets/js/script.js')}}"></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/jquery-ui.min.js')}}"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/popper.min.js')}}"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/bootstrap.min.js')}}"
    ></script>

    <script
      src="{{url('dashboard/js/waves.min.js')}}"
      type="88add89075ed2b878b934720-text/javascript"
    ></script>

    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/jquery.slimscroll.js')}}"
    ></script>

    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/modernizr.js')}}"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/css-scrollbars.js')}}"
    ></script>

    <script
      type="d28fd8086f5eb18f81d8672a-text/javascript"
      src="{{url('dashboard/js/sweetalert.min.js')}}"
    ></script>
    <script
      type="d28fd8086f5eb18f81d8672a-text/javascript"
      src="{{url('dashboard/js/modal.js')}}"
    ></script>
    <script
      src="{{url('dashboard/js/classie.js')}}"
      type="d28fd8086f5eb18f81d8672a-text/javascript"
    ></script>
    <script
      type="d28fd8086f5eb18f81d8672a-text/javascript"
      src="{{url('dashboard/js/modaleffects.js')}}"
    ></script>
    <script
      src="{{url('dashboard/js/pcoded.min.js')}}"
      type="d28fd8086f5eb18f81d8672a-text/javascript"
    ></script>

    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/select2.full.min.js')}}"
    ></script>

    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/bootstrap-multiselect.js')}}"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/jquery.multi-select.js')}}"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/jquery.quicksearch.js')}}"
    ></script>

    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/select2-custom.js')}}"
    ></script>
    <script
      src="{{url('dashboard/js/pcoded.min.js')}}"
      type="88add89075ed2b878b934720-text/javascript"
    ></script>
    <script
      src="{{url('dashboard/js/vertical-layout.min.js')}}"
      type="88add89075ed2b878b934720-text/javascript"
    ></script>
    <script
      src="{{url('dashboard/js/jquery.mcustomscrollbar.concat.min.js')}}"
      type="88add89075ed2b878b934720-text/javascript"
    ></script>
    <script
      type="88add89075ed2b878b934720-text/javascript"
      src="{{url('dashboard/js/script.js')}}"
    ></script>

    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
      type="88add89075ed2b878b934720-text/javascript"
    ></script>
    <script type="88add89075ed2b878b934720-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
    <script
      src="{{url('dashboard/js/rocket-loader.min.js')}}"
      data-cf-settings="88add89075ed2b878b934720-|49"
      defer=""
    ></script>
  </body>

  <!-- Mirrored from colorlib.com/polygon/admindek/default/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:09:15 GMT -->
</html>
