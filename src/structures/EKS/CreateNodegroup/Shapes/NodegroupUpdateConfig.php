<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maxUnavailable
 * @property int<1, 100> $maxUnavailablePercentage
 */
class NodegroupUpdateConfig extends Shape
{
    /**
     * @param array{
     *     maxUnavailable?: int<1, max>,
     *     maxUnavailablePercentage?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
