<?php
session_start();
session_unset();
session_destroy();
echo '<a href="login.html">Login again</a>';
exit;
