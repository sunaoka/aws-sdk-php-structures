<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DesiredInstances
 * @property int|null $DesiredSessions
 */
class ComputeCapacity extends Shape
{
    /**
     * @param array{
     *     DesiredInstances?: int|null,
     *     DesiredSessions?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
