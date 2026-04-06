<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSON'|'Text'|null $LogFormat
 * @property 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL'|null $ApplicationLogLevel
 * @property 'DEBUG'|'INFO'|'WARN'|null $SystemLogLevel
 * @property string|null $LogGroup
 */
class LoggingConfig extends Shape
{
    /**
     * @param array{
     *     LogFormat?: 'JSON'|'Text'|null,
     *     ApplicationLogLevel?: 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL'|null,
     *     SystemLogLevel?: 'DEBUG'|'INFO'|'WARN'|null,
     *     LogGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
