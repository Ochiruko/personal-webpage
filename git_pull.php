<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
ignore_user_abort(true);

// Get the home directory dynamically
$home = '/nfs/elsrv4/users1/grad/dsommer'; // getenv('HOME');
$logfile = $home . '/public_html/git_pull.log';
$script = $home . '/public_html/git_pull.sh';

// Run the shell command and capture output
$output = shell_exec('/bin/bash ' . escapeshellarg($script) . ' 2>&1');

// Log the output
file_put_contents($logfile, "Git Pull at " . date("Y-m-d H:i:s") . "\n" . $output . "\n\n", FILE_APPEND);

echo "Attempted to pull from Github, see git_pull.log for details."
?>
