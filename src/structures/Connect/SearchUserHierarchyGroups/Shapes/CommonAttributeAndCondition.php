<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUserHierarchyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TagCondition>|null $TagConditions
 * @property HierarchyGroupCondition|null $HierarchyGroupCondition
 */
class CommonAttributeAndCondition extends Shape
{
    /**
     * @param array{
     *     TagConditions?: list<TagCondition>|null,
     *     HierarchyGroupCondition?: HierarchyGroupCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
