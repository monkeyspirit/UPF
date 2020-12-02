@extends('utils.basepage')
@section('body')
    <div class="jumbotron mb-0 text-center" style="background: #fff5ea">
        <h1 class="display-4 text-center title-jumbo">@lang('labels.welcome')!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>

    <!-- Login modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('labels.login')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Registration modal -->
    <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('labels.register')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('labels.register')</button>
                        <hr>
                        <a href="">@lang('labels.register_rest')</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div style="height:100%; background: url({{asset('/image/jumbotron_op.jpg')}}); background-size: 100%; background-repeat: no-repeat;">
    <div class="container text-center" >
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div class="card" style="border: none; background: none">
                    <div class="card-body">
                        <button type="button" class="my_button button-2" data-toggle="modal" data-target="#loginModal">
                            <div class="slide"></div>
                            <a class="my_a" href="#">@lang('labels.login')</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="border: none;  background: none">
                    <div class="card-body">
                        <button type="button" class="my_button button-2" data-toggle="modal" data-target="#registrationModal">
                            <div class="slide"></div>
                            <a class="my_a" href="#">@lang('labels.register')</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>




</div>

@endsection
