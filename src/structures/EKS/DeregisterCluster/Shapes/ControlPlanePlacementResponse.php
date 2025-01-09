<?php

namespace Sunaoka\Aws\Structures\EKS\DeregisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupName
 */
class ControlPlanePlacementResponse extends Shape
{
    /**
     * @param array{groupName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
