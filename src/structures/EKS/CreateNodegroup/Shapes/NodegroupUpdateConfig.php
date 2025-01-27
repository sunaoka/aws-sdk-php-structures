<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $maxUnavailable
 * @property int<1, 100>|null $maxUnavailablePercentage
 * @property 'DEFAULT'|'MINIMAL'|null $updateStrategy
 */
class NodegroupUpdateConfig extends Shape
{
    /**
     * @param array{
     *     maxUnavailable?: int<1, max>|null,
     *     maxUnavailablePercentage?: int<1, 100>|null,
     *     updateStrategy?: 'DEFAULT'|'MINIMAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
