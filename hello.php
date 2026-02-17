<?php
declare(strict_types=1);

/**
 * Simple script to print a greeting.
 *
 * This script outputs "hello mf" to the standard output.
 */
function main(): void
{
    echo 'hello mf';
}

if (php_sapi_name() === 'cli' || defined('STDIN')) {
    main();
} else {
    // For web context, output directly
    main();
}
?>