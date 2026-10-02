<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroup
 * @property 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL'|null $applicationLogLevel
 * @property 'DEBUG'|'INFO'|'WARN'|null $systemLogLevel
 */
class LoggingConfig extends Shape
{
    /**
     * @param array{
     *     logGroup?: string|null,
     *     applicationLogLevel?: 'TRACE'|'DEBUG'|'INFO'|'WARN'|'ERROR'|'FATAL'|null,
     *     systemLogLevel?: 'DEBUG'|'INFO'|'WARN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
