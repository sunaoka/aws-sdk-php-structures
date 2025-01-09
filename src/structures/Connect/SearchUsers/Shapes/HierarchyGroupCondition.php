<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'EXACT'|'WITH_CHILD_GROUPS' $HierarchyGroupMatchType
 */
class HierarchyGroupCondition extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     HierarchyGroupMatchType?: 'EXACT'|'WITH_CHILD_GROUPS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
