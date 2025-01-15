<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserHierarchyStructure\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HierarchyLevelUpdate|null $LevelOne
 * @property HierarchyLevelUpdate|null $LevelTwo
 * @property HierarchyLevelUpdate|null $LevelThree
 * @property HierarchyLevelUpdate|null $LevelFour
 * @property HierarchyLevelUpdate|null $LevelFive
 */
class HierarchyStructureUpdate extends Shape
{
    /**
     * @param array{
     *     LevelOne?: HierarchyLevelUpdate|null,
     *     LevelTwo?: HierarchyLevelUpdate|null,
     *     LevelThree?: HierarchyLevelUpdate|null,
     *     LevelFour?: HierarchyLevelUpdate|null,
     *     LevelFive?: HierarchyLevelUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
