<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $minSize
 * @property int $maxSize
 * @property int $desiredSize
 */
class NodegroupScalingConfig extends Shape
{
    /**
     * @param array{
     *     minSize?: int,
     *     maxSize?: int,
     *     desiredSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
