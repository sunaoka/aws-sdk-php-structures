<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TagCondition> $TagConditions
 * @property HierarchyGroupCondition $HierarchyGroupCondition
 */
class AttributeAndCondition extends Shape
{
    /**
     * @param array{
     *     TagConditions?: list<TagCondition>,
     *     HierarchyGroupCondition?: HierarchyGroupCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
