<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: login.php');
}
?>
<!DOCTYPE HTML>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Admin panel RCON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.min.js" ></script>
    <script type="text/javascript" src="js/jquery-ui.min.js" ></script>
    <script type="text/javascript" src="js/jquery-migrate.min.js" ></script>
    <script type="text/javascript" src="js/script.js" ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA+5pVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ1dWlkOjY1RTYzOTA2ODZDRjExREJBNkUyRDg4N0NFQUNCNDA3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkI0N0JDRjhEMDY5MTExRTI5OUZEQTZGODg4RDc1ODdCIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkI0N0JDRjhDMDY5MTExRTI5OUZEQTZGODg4RDc1ODdCIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzYgKE1hY2ludG9zaCkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDowMTgwMTE3NDA3MjA2ODExODA4M0ZFMkJBM0M1RUU2NSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDowNjgwMTE3NDA3MjA2ODExODA4M0U3NkRBMDNEMDVDMSIvPiA8ZGM6dGl0bGU+IDxyZGY6QWx0PiA8cmRmOmxpIHhtbDpsYW5nPSJ4LWRlZmF1bHQiPmdseXBoaWNvbnM8L3JkZjpsaT4gPC9yZGY6QWx0PiA8L2RjOnRpdGxlPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgFdWUIAAAExSURBVHjaxFUBEcIwDFxRMAmVMAnBQSVMAhImAQlIQAJzUBzgAByU9C7jspCsZdc7cvfHyNbPLcn/upRSVwOMiEiEW+05R4c3wznX48+T5/Cc6yrioJBNCBBpUJ4D+R8xflUQbbiwNuRrjzghHiy/IOcy4YC4svy44mTkk0KyF2Hh5S26de0i1rRoLya1RVTANyjQc065RcF45TvimFeT1vNIOS3C1xblqnRD25ZoCK8X4vs8T1z9orFYeGXYUHconI2OLswoKRbFlX5S8i9BFlK0irlAAhu3Q4F/5v0Ea8hy9diQrefB0sFoDWuRPxGPBvnKJrQCQ2uhyQLXBgXOlptCQzcdNKvwDd3UW27KhzyxgW5aQm5L8YMj5O8rLAGUBQn//+gbfvQS9jzXDuMtwAATXCNvATubRQAAAABJRU5ErkJggg==" />
</head>
<body>
  <div class="container-fluid" id="content">
    <div class="alert alert-info" id="alertMessage">Admin Panel RCON</div>
    <div id="consoleRow">
      <div id="consoleContent">
        <div class="d-md-flex">
          <div class="col-1">
            <h3> Console</h3>
          </div>
          <div class="col-1 offset-10">
            <button type="button" class="btn btn-secondary float-end" id="btnLogout"><span class="hidden-xs"> Logout</span></button>
          </div>
        </div>
        <div>
          <ul class="list-group" id="groupConsole"></ul>
        </div>
      </div>
      <div class="container">
        <div id="txtCommandResults"></div>
      </div>
      <div class="container-fluid fixed-bottom" id="consoleCommand">
        <div class="row input-group">
          <div class="form-check form-switch col-sm-auto">
            <input class="form-check-input float-end" id="chkAutoScroll" type="checkbox" checked="true" autocomplete="off" title="Auto Scroll" />
          </div>
          <div class="col">
            <input type="text" class="form-control" id="txtCommand">
          </div>
          <div class="col-md-auto">
            <button type="button" class="btn btn-primary" id="btnSend"><span class="hidden-xs"> Send</span></button>
            <button type="button" class="btn btn-warning" id="btnClearLog"><span class="hidden-xs"> Clear</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>