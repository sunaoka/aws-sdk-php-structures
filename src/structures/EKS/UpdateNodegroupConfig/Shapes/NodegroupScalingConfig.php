<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $minSize
 * @property int<1, max>|null $maxSize
 * @property int<0, max>|null $desiredSize
 */
class NodegroupScalingConfig extends Shape
{
    /**
     * @param array{
     *     minSize?: int<0, max>|null,
     *     maxSize?: int<1, max>|null,
     *     desiredSize?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
