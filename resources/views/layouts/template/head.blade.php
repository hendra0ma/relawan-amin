<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Relawan Amin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('')}}assets/assets/img/favicon.png" rel="icon">
  <link href="{{asset('')}}assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('')}}assets/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('')}}assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('')}}assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('')}}assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('')}}assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="{{asset('')}}assets/assets/css/style.css" rel="stylesheet">
  <style>
    #picture__input {
      display: none;
    }

    .picture {
      width: 100%;
      height: 91%;
      aspect-ratio: 16/9;
      background: #ddd;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #aaa;
      border: 2px dashed currentcolor;
      cursor: pointer;
      font-family: sans-serif;
      transition: color 300ms ease-in-out, background 300ms ease-in-out;
      outline: none;
      overflow: hidden;
    }

    .picture:hover {
      color: #777;
      background: #ccc;
    }

    .picture:active {
      border-color: turquoise;
      color: turquoise;
      background: #eee;
    }

    .picture:focus {
      color: #777;
      background: #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .picture__img {
      max-width: 100%;
    }

    .form-select, option {
      padding: 10px 15px !important; 
      border-radius: 0;
      font-size: 14px;
    }
    </style>

</head>

<body>