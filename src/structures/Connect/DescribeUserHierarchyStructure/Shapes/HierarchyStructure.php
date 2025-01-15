<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeUserHierarchyStructure\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HierarchyLevel|null $LevelOne
 * @property HierarchyLevel|null $LevelTwo
 * @property HierarchyLevel|null $LevelThree
 * @property HierarchyLevel|null $LevelFour
 * @property HierarchyLevel|null $LevelFive
 */
class HierarchyStructure extends Shape
{
    /**
     * @param array{
     *     LevelOne?: HierarchyLevel|null,
     *     LevelTwo?: HierarchyLevel|null,
     *     LevelThree?: HierarchyLevel|null,
     *     LevelFour?: HierarchyLevel|null,
     *     LevelFive?: HierarchyLevel|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
