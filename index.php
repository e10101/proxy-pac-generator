<?php
function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['SERVER_NAME'];
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proxy PAC Generator for iPhone/iPad HTTP Proxy</title>
    <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="./css/jumbotron-narrow.css" rel="stylesheet">
</head>
<body>
<div class="container" ng-app>
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="https://github.com/e10101/proxy-pac-generator">Project</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Proxy PAC Generator Online</h3>
      </div>
      <div class="jumbotron">
	<h1>Input</h1>
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputAddress" class="col-sm-2 control-label">Server</label>
    <div class="col-sm-10" ng-init="server='pac.sjz.io'">
      <input type="text" class="form-control" ng-model="server" id="inputAddress" placeholder="example.com or 192.168.1.1">
	<span class="help-block">Server doamin or IP address, WITHOUT http:// or https://</span>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPort" class="col-sm-2 control-label">Port</label>
    <div class="col-sm-10" ng-init="port='1080'">
      <input type="text" class="form-control" ng-model="port" id="inputPort" placeholder="1080">
    </div>
  </div>
</form>

      </div>

      <div class="jumbotron">
	<h1>Output</h1>
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputUrl" class="col-sm-2 control-label">URL</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  id="inputUrl" placeholder="Auto Generator" value="<?php echo url(); ?>/{{server}}/{{port}}/" readonly>
	<span class="help-block">Paste the URL to iPhone/iPad HTTP Proxy field.</span>
    </div>
  </div>
  <div class="form-group">
    <label for="inputContent" class="col-sm-2 control-label">Preview</label>
    <div class="col-sm-10">
	<textarea readonly id="inputContent" class="form-control" rows="4">function FindProxyForURL(url, host) {
	return "SOCKS {{server}}:{{port}}";
}</textarea>

    </div>
  </div>
</form>

      </div>
      <footer class="footer">
        <p>&copy; <?php echo date('Y', time()); ?> <?php echo $_SERVER['SERVER_NAME']; ?></p>
      </footer>

    </div> <!-- /container -->
<script src="//apps.bdimg.com/libs/angular.js/1.4.6/angular.min.js"></script>
</body>
</html>
