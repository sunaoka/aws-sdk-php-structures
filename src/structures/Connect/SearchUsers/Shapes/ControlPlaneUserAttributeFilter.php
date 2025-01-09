<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeAndCondition> $OrConditions
 * @property AttributeAndCondition $AndCondition
 * @property TagCondition $TagCondition
 * @property HierarchyGroupCondition $HierarchyGroupCondition
 */
class ControlPlaneUserAttributeFilter extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<AttributeAndCondition>,
     *     AndCondition?: AttributeAndCondition,
     *     TagCondition?: TagCondition,
     *     HierarchyGroupCondition?: HierarchyGroupCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
