<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DesiredInstances
 * @property int $DesiredSessions
 */
class ComputeCapacity extends Shape
{
    /**
     * @param array{
     *     DesiredInstances?: int,
     *     DesiredSessions?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
