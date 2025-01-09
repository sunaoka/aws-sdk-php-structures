<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HealthCheck
 */
class Primary extends Shape
{
    /**
     * @param array{HealthCheck: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
