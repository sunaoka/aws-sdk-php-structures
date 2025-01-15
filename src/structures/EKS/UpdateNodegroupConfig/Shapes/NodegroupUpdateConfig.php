<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $maxUnavailable
 * @property int<1, 100>|null $maxUnavailablePercentage
 */
class NodegroupUpdateConfig extends Shape
{
    /**
     * @param array{
     *     maxUnavailable?: int<1, max>|null,
     *     maxUnavailablePercentage?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
