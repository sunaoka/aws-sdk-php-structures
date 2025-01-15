<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property 'EXACT'|'WITH_CHILD_GROUPS'|null $HierarchyGroupMatchType
 */
class HierarchyGroupCondition extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     HierarchyGroupMatchType?: 'EXACT'|'WITH_CHILD_GROUPS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
