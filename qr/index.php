<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title>Send Email Example</title>
    <style>
        .center-block {                                       
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Generate QR Code</h5>
                    <form id="generateQrForm" class="form-signin">
                        <div class="form-label-group">
                            <label for="inputEmail">Text For QR <span style="color: #FF0000">*</span></label>
                            <input type="text" name="qrText" id="qrText" class="form-control" required placeholder="Enter something to generate QR">
                        </div> <br/>
                       <div id="generatedQr text-center">
                            <img src="" id="generatedQrImg" class="center-block">
                        </div> <br/>
                        <button type="submit" name="generateQrBtn" id="generateQrBtn" class="btn btn-lg btn-primary btn-block text-uppercase" >Generate QR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="generate-qr-js.js"></script>
</body>
</html>