<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property 'CRITICAL'|'ERROR'|'WARNING'|'INFO'|'DEBUG' $LogLevel
 * @property string $CloudWatchLogGroupArn
 */
class ModuleLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     LogLevel?: 'CRITICAL'|'ERROR'|'WARNING'|'INFO'|'DEBUG',
     *     CloudWatchLogGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
