<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 200> $MinimumPollers
 * @property int<1, 2000> $MaximumPollers
 */
class ProvisionedPollerConfig extends Shape
{
    /**
     * @param array{
     *     MinimumPollers?: int<1, 200>,
     *     MaximumPollers?: int<1, 2000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
