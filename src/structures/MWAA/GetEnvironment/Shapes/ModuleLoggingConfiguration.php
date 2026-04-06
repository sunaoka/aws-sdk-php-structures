<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CloudWatchLogGroupArn
 * @property bool|null $Enabled
 * @property 'CRITICAL'|'ERROR'|'WARNING'|'INFO'|'DEBUG'|null $LogLevel
 */
class ModuleLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     CloudWatchLogGroupArn?: string|null,
     *     Enabled?: bool|null,
     *     LogLevel?: 'CRITICAL'|'ERROR'|'WARNING'|'INFO'|'DEBUG'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
