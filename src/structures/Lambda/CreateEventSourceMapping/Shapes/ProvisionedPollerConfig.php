<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinimumPollers
 * @property int $MaximumPollers
 */
class ProvisionedPollerConfig extends Shape
{
    /**
     * @param array{
     *     MinimumPollers?: int,
     *     MaximumPollers?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
