<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeUserHierarchyStructure\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HierarchyLevel $LevelOne
 * @property HierarchyLevel $LevelTwo
 * @property HierarchyLevel $LevelThree
 * @property HierarchyLevel $LevelFour
 * @property HierarchyLevel $LevelFive
 */
class HierarchyStructure extends Shape
{
    /**
     * @param array{
     *     LevelOne?: HierarchyLevel,
     *     LevelTwo?: HierarchyLevel,
     *     LevelThree?: HierarchyLevel,
     *     LevelFour?: HierarchyLevel,
     *     LevelFive?: HierarchyLevel
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
