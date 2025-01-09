<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserHierarchyStructure\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HierarchyLevelUpdate $LevelOne
 * @property HierarchyLevelUpdate $LevelTwo
 * @property HierarchyLevelUpdate $LevelThree
 * @property HierarchyLevelUpdate $LevelFour
 * @property HierarchyLevelUpdate $LevelFive
 */
class HierarchyStructureUpdate extends Shape
{
    /**
     * @param array{
     *     LevelOne?: HierarchyLevelUpdate,
     *     LevelTwo?: HierarchyLevelUpdate,
     *     LevelThree?: HierarchyLevelUpdate,
     *     LevelFour?: HierarchyLevelUpdate,
     *     LevelFive?: HierarchyLevelUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
