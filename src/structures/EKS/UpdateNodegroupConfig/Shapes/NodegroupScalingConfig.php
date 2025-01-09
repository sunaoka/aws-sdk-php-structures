<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $minSize
 * @property int<1, max> $maxSize
 * @property int<0, max> $desiredSize
 */
class NodegroupScalingConfig extends Shape
{
    /**
     * @param array{
     *     minSize?: int<0, max>,
     *     maxSize?: int<1, max>,
     *     desiredSize?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
