<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeUserHierarchyGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HierarchyGroupSummary $LevelOne
 * @property HierarchyGroupSummary $LevelTwo
 * @property HierarchyGroupSummary $LevelThree
 * @property HierarchyGroupSummary $LevelFour
 * @property HierarchyGroupSummary $LevelFive
 */
class HierarchyPath extends Shape
{
    /**
     * @param array{
     *     LevelOne?: HierarchyGroupSummary,
     *     LevelTwo?: HierarchyGroupSummary,
     *     LevelThree?: HierarchyGroupSummary,
     *     LevelFour?: HierarchyGroupSummary,
     *     LevelFive?: HierarchyGroupSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
