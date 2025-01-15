<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupName
 */
class ControlPlanePlacementRequest extends Shape
{
    /**
     * @param array{groupName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
