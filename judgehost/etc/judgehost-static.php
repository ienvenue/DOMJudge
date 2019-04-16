<?php
// Do not edit this file!
// Use configure with the right parameters, and run 'make' and 'make install'
// Variables you can change are in common-config.php and judgehost-config.php

// Generated from 'judgehost-static.php.in' on 2019年 04月 10日 星期三 11:56:20 CST.

define('DOMJUDGE_VERSION', '6.0.3');

define('BINDIR',      '/home/yancy/domjudge/judgehost/bin');
define('ETCDIR',      '/home/yancy/domjudge/judgehost/etc');
define('LIBDIR',      '/home/yancy/domjudge/judgehost/lib');
define('LIBVENDORDIR','/home/yancy/domjudge/judgehost/lib/vendor');
define('LIBJUDGEDIR', '/home/yancy/domjudge/judgehost/lib/judge');
define('LOGDIR',      '/home/yancy/domjudge/judgehost/log');
define('RUNDIR',      '/home/yancy/domjudge/judgehost/run');
define('TMPDIR',      '/home/yancy/domjudge/judgehost/tmp');
define('JUDGEDIR',    '/home/yancy/domjudge/judgehost/judgings');
define('CHROOTDIR',   '/chroot/domjudge');
define('CGROUPDIR',   '/sys/fs/cgroup');

define('RUNUSER',     'domjudge-run');
define('RUNGROUP',    'domjudge-run');

// Possible exitcodes from testcase_run.sh and their meaning.
$EXITCODES = array (
    0   => 'correct',
    101 => 'compiler-error',
    102 => 'timelimit',
    103 => 'run-error',
    104 => 'no-output',
    105 => 'wrong-answer',
//  106 => 'presentation-error', /* dropped since 5.0 */
    107 => 'memory-limit', /* not in use internally */
    108 => 'output-limit',
    120 => 'compare-error',
/* Uncomment the next line(s) to accept internal errors in the judging
 * backend as outcome. WARNING: it is highly discouraged to enable
 * this, as the judgehost may be in an inconsistent state after an
 * internal error occurred and it is recommended to inspect manually.
 */
//  127 => 'internal-error',
);
