<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HierarchyGroupSummaryReference|null $LevelOne
 * @property HierarchyGroupSummaryReference|null $LevelTwo
 * @property HierarchyGroupSummaryReference|null $LevelThree
 * @property HierarchyGroupSummaryReference|null $LevelFour
 * @property HierarchyGroupSummaryReference|null $LevelFive
 */
class HierarchyPathReference extends Shape
{
    /**
     * @param array{
     *     LevelOne?: HierarchyGroupSummaryReference|null,
     *     LevelTwo?: HierarchyGroupSummaryReference|null,
     *     LevelThree?: HierarchyGroupSummaryReference|null,
     *     LevelFour?: HierarchyGroupSummaryReference|null,
     *     LevelFive?: HierarchyGroupSummaryReference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
