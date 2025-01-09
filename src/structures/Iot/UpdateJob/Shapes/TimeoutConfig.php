<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $inProgressTimeoutInMinutes
 */
class TimeoutConfig extends Shape
{
    /**
     * @param array{inProgressTimeoutInMinutes?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
