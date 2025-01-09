<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxUnavailable
 * @property int $maxUnavailablePercentage
 */
class NodegroupUpdateConfig extends Shape
{
    /**
     * @param array{
     *     maxUnavailable?: int,
     *     maxUnavailablePercentage?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
