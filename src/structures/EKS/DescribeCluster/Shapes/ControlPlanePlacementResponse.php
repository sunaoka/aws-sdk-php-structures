<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupName
 * @property 'host'|'rack'|null $spreadLevel
 */
class ControlPlanePlacementResponse extends Shape
{
    /**
     * @param array{
     *     groupName?: string|null,
     *     spreadLevel?: 'host'|'rack'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
