<?php
	//header('Content-Type: application/x-ns-proxy-autoconfig');
	header('Content-Type: application/javascript');
	$address = '';
	$port = '';
	if (isset($_REQUEST['address'])) {
		$address = $_REQUEST['address'];
	}
	if (isset($_REQUEST['port'])) {
		$port = $_REQUEST['port'];
	}

	if($address == '') {
		echo "No address";
		exit;
	}
	if($port == '') {
		echo "No port";
		exit;
	}
?>
function FindProxyForURL(url, host) {
	return "SOCKS <?php echo $address; ?>:<?php echo $port; ?>";
}
