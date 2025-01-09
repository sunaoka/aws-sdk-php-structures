<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentHierarchyGroup $Level1
 * @property AgentHierarchyGroup $Level2
 * @property AgentHierarchyGroup $Level3
 * @property AgentHierarchyGroup $Level4
 * @property AgentHierarchyGroup $Level5
 */
class HierarchyGroups extends Shape
{
    /**
     * @param array{
     *     Level1?: AgentHierarchyGroup,
     *     Level2?: AgentHierarchyGroup,
     *     Level3?: AgentHierarchyGroup,
     *     Level4?: AgentHierarchyGroup,
     *     Level5?: AgentHierarchyGroup
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
