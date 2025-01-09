<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUserHierarchyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TagCondition> $TagConditions
 */
class CommonAttributeAndCondition extends Shape
{
    /**
     * @param array{TagConditions?: list<TagCondition>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
