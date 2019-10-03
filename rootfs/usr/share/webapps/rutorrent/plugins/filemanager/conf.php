<?php
$fm['tempdir'] = '/tmp';                // path were to store temporary data ; must be writable
$fm['mkdperm'] = 755;           // default permission to set to new created directories
// set with fullpath to binary or leave empty
$pathToExternals['rar'] = '/usr/sbin/rar';
$pathToExternals['zip'] = '/usr/sbin/zip';
$pathToExternals['unzip'] = '/usr/sbin/unzip';
$pathToExternals['tar'] = '/usr/sbin/tar';
$pathToExternals['bzip2'] = '/usr/sbin/bzip2';
// archive mangling, see archiver man page before editing
$fm['archive']['types'] = array('rar', 'zip', 'tar', 'gzip', 'bzip2');
$fm['archive']['compress'][0] = range(0, 5);
$fm['archive']['compress'][1] = array('-0', '-1', '-9');
$fm['archive']['compress'][2] = $fm['archive']['compress'][3] = $fm['archive']['compress'][4] = array(0);
?>
