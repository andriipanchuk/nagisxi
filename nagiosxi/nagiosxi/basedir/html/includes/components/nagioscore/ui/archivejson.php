<?php
//
// Copyright (c) 2008-2017 Nagios Enterprises, LLC. All rights reserved.
//

require_once(dirname(__FILE__) . '/../coreuiproxy.inc.php');
header('Content-Type: application/json');
coreui_do_proxy("archivejson.cgi");