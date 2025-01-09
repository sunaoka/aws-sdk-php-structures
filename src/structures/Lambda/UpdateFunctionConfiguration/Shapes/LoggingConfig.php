<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSON'|'Text' $LogFormat
 * @property 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL' $ApplicationLogLevel
 * @property 'DEBUG'|'INFO'|'WARN' $SystemLogLevel
 * @property string $LogGroup
 */
class LoggingConfig extends Shape
{
    /**
     * @param array{
     *     LogFormat?: 'JSON'|'Text',
     *     ApplicationLogLevel?: 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL',
     *     SystemLogLevel?: 'DEBUG'|'INFO'|'WARN',
     *     LogGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
