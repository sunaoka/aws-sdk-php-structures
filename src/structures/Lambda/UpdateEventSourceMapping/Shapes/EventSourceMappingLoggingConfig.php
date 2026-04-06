<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEBUG'|'INFO'|'WARN'|null $SystemLogLevel
 */
class EventSourceMappingLoggingConfig extends Shape
{
    /**
     * @param array{SystemLogLevel?: 'DEBUG'|'INFO'|'WARN'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
