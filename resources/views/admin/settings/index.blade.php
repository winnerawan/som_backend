@extends('template')
@section('dashboard')
    
    <div class="container-fluid elements py-4 tabs">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Settings</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-12">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-icon" role="tab" aria-controls="home" aria-selected="true"><i class="la la-info"></i> Term of Service</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile" aria-selected="false"><i class="la la-cab"></i> Pickup & Delivery Cost</a>
                                                </li>
                                                
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home-icon" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="col-sm-12">
                                                            <div style="margin-top:8px;" class="form-group">
                                                                <form method="post">
                                                                    <textarea id="summernote" name="editordata"></textarea>
                                                                </form>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-tab">
                                                    <form role="form">
                                                        <!-- text input -->
                                                        <div style="margin-top:8px;" class="form-group">
                                                            <label>Price/KM</label>
                                                            <input type="number" class="form-control" placeholder="Enter ...">
                                                        </div>
                                                        
                                                    </form>
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
@section('extrascripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script>
       $('#summernote').summernote({
            minHeight: 200,
            placeholder: 'Write here ...',
            focus: false,
            airMode: false,
            fontNames: ['Roboto', 'Calibri', 'Times New Roman', 'Arial'],
            fontNamesIgnoreCheck: ['Roboto', 'Calibri'],
            dialogsInBody: true,
            dialogsFade: true,
            disableDragAndDrop: false,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['style', 'ul', 'ol', 'paragraph']],
                ['fontsize', ['fontsize']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['height', ['height']],
                ['misc', ['undo', 'redo', 'print', 'help', 'fullscreen']]
            ],
            popover: {
                air: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']]
                ]
            },
            print: {
                //'stylesheetUrl': 'url_of_stylesheet_for_printing'
            }
        });
    </script>
@endsection
