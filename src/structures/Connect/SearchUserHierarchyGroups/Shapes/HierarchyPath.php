<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUserHierarchyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HierarchyGroupSummary|null $LevelOne
 * @property HierarchyGroupSummary|null $LevelTwo
 * @property HierarchyGroupSummary|null $LevelThree
 * @property HierarchyGroupSummary|null $LevelFour
 * @property HierarchyGroupSummary|null $LevelFive
 */
class HierarchyPath extends Shape
{
    /**
     * @param array{
     *     LevelOne?: HierarchyGroupSummary|null,
     *     LevelTwo?: HierarchyGroupSummary|null,
     *     LevelThree?: HierarchyGroupSummary|null,
     *     LevelFour?: HierarchyGroupSummary|null,
     *     LevelFive?: HierarchyGroupSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
