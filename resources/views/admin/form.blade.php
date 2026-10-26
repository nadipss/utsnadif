@extends('layouts.admin')

@section('content')
<!-- BEGIN container -->
<div class="container">
    <!-- BEGIN row -->
    <div class="row justify-content-center">
        <!-- BEGIN col-10 -->
        <div class="col-xl-10">
            <!-- BEGIN row -->
            <div class="row">
                <!-- BEGIN col-9 -->
                <div class="col-xl-9">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">FORMS</a></li>
                        <li class="breadcrumb-item active">FORM ELEMENTS</li>
                    </ul>

                    <h1 class="page-header">
                        Form Elements <small>page header description goes here...</small>
                    </h1>

                    <hr class="mb-4">

                    <!-- BEGIN #formControls -->
                    <div id="formControls" class="mb-5">
                        <h4>Form controls</h4>
                        <p>Textual form controls—like <code>&lt;input&gt;</code>s, <code>&lt;select&gt;</code>s, and <code>&lt;textarea&gt;</code>s—are styled with the .form-control class. Included are styles for general appearance, focus state, sizing, and more. Please read the <a href="https://getbootstrap.com/docs/5.3/components/forms/" target="_blank">official Bootstrap documentation</a> for the full list of options.</p>
                        <div class="card">
                            <div class="card-body pb-2">
                                <form>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="exampleFormControlInput1">Text input</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="exampleFormControlTextarea1">Textarea</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="exampleFormControlFile1">File input</label>
                                                <input type="file" class="form-control" id="exampleFormControlFile1">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="exampleFormControlSelect1">Select dropdown</label>
                                                <select class="form-select" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="exampleFormControlSelect2">Multiple select</label>
                                                <select multiple class="form-select" id="exampleFormControlSelect2">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="hljs-container rounded-bottom">
                                <pre><code class="xml" data-url="assets/data/form-elements/code-1.json"></code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- END #formControls -->

                    <!-- BEGIN #sizing -->
                    <div id="sizing" class="mb-5">
                        <h4>Sizing</h4>
                        <p>Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-n3">
                                    <div class="col-xl-6">
                                        <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg">
                                        <input class="form-control mb-3" type="text" placeholder="Default input">
                                        <input class="form-control form-control-sm mb-3" type="text" placeholder=".form-control-sm">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select form-select-lg mb-3">
                                            <option>Large select</option>
                                        </select>
                                        <select class="form-select mb-3">
                                            <option>Default select</option>
                                        </select>
                                        <select class="form-select form-select-sm mb-3">
                                            <option>Small select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="hljs-container rounded-bottom">
                                <pre><code class="xml" data-url="assets/data/form-elements/code-2.json"></code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- END #sizing -->

                    <!-- BEGIN #checkboxes -->
                    <div id="checkboxes" class="mb-5">
                        <h4>Checkboxes</h4>
                        <p>Default checkboxes are improved upon with the help of <code>.form-check</code>, a single class for both input types that improves the layout and behavior of their HTML elements.</p>
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-n3">
                                    <div class="col-xl-6">
                                        <div class="small text-inverse text-opacity-50 mb-2"><b class="fw-bold">DEFAULT CHECKBOX</b></div>
                                        <div class="form-group mb-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">Default checkbox</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked>
                                                <label class="form-check-label" for="defaultCheck2">Checked checkbox</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" disabled>
                                                <label class="form-check-label" for="defaultCheck3">Disabled checkbox</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="small text-inverse text-opacity-50 mb-2"><b class="fw-bold">INLINE CHECKBOX</b></div>
                                        <div class="form-group mb-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked>
                                                <label class="form-check-label" for="inlineCheckbox2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hljs-container rounded-bottom">
                                <pre><code class="xml" data-url="assets/data/form-elements/code-6.json"></code></pre>
                            </div>
                        </div>
                    </div>
                    <!-- END #checkboxes -->
                </div>
                <!-- END col-9-->

                <!-- BEGIN col-3 -->
                <div class="col-xl-3">
                    <!-- BEGIN #sidebar-bootstrap -->
                    <nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
                        <nav class="nav">
                            <a class="nav-link" href="#formControls" data-toggle="scroll-to">Form controls</a>
                            <a class="nav-link" href="#sizing" data-toggle="scroll-to">Sizing</a>
                            <a class="nav-link" href="#checkboxes" data-toggle="scroll-to">Checkboxes</a>
                        </nav>
                    </nav>
                    <!-- END #sidebar-bootstrap -->
                </div>
                <!-- END col-3 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END col-10 -->
    </div>
    <!-- END row -->
</div>
<!-- END container -->
@endsection

@push('scripts')
<!-- ================== BEGIN page-js ================== -->
<script src="{{ asset('adminlanding/plugins/@highlightjs/cdn-assets/highlight.min.js') }}"></script>
<script src="{{ asset('adminlanding/js/demo/highlightjs.demo.js') }}"></script>
<script src="{{ asset('adminlanding/js/demo/sidebar-scrollspy.demo.js') }}"></script>
<!-- ================== END page-js ================== -->
@endpush