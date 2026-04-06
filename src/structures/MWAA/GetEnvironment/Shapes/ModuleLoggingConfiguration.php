<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property 'CRITICAL'|'ERROR'|'WARNING'|'INFO'|'DEBUG'|null $LogLevel
 * @property string|null $CloudWatchLogGroupArn
 */
class ModuleLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     LogLevel?: 'CRITICAL'|'ERROR'|'WARNING'|'INFO'|'DEBUG'|null,
     *     CloudWatchLogGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
