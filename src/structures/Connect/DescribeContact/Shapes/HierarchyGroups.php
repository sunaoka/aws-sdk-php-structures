<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentHierarchyGroup|null $Level1
 * @property AgentHierarchyGroup|null $Level2
 * @property AgentHierarchyGroup|null $Level3
 * @property AgentHierarchyGroup|null $Level4
 * @property AgentHierarchyGroup|null $Level5
 */
class HierarchyGroups extends Shape
{
    /**
     * @param array{
     *     Level1?: AgentHierarchyGroup|null,
     *     Level2?: AgentHierarchyGroup|null,
     *     Level3?: AgentHierarchyGroup|null,
     *     Level4?: AgentHierarchyGroup|null,
     *     Level5?: AgentHierarchyGroup|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
