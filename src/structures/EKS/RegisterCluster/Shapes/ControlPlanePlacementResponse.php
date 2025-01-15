<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupName
 */
class ControlPlanePlacementResponse extends Shape
{
    /**
     * @param array{groupName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
