<?php

namespace Sunaoka\Aws\Structures\Iot\SetLoggingOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'|null $logLevel
 */
class LoggingOptionsPayload extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     logLevel?: 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
