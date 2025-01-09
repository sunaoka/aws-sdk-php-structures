<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HierarchyGroupSummaryReference $LevelOne
 * @property HierarchyGroupSummaryReference $LevelTwo
 * @property HierarchyGroupSummaryReference $LevelThree
 * @property HierarchyGroupSummaryReference $LevelFour
 * @property HierarchyGroupSummaryReference $LevelFive
 */
class HierarchyPathReference extends Shape
{
    /**
     * @param array{
     *     LevelOne?: HierarchyGroupSummaryReference,
     *     LevelTwo?: HierarchyGroupSummaryReference,
     *     LevelThree?: HierarchyGroupSummaryReference,
     *     LevelFour?: HierarchyGroupSummaryReference,
     *     LevelFive?: HierarchyGroupSummaryReference
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
