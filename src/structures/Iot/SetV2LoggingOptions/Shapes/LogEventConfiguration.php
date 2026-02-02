<?php

namespace Sunaoka\Aws\Structures\Iot\SetV2LoggingOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventType
 * @property 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'|null $logLevel
 * @property string|null $logDestination
 */
class LogEventConfiguration extends Shape
{
    /**
     * @param array{
     *     eventType: string,
     *     logLevel?: 'DEBUG'|'INFO'|'ERROR'|'WARN'|'DISABLED'|null,
     *     logDestination?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
