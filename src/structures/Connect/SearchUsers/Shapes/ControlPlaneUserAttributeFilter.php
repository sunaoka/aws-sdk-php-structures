<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeAndCondition>|null $OrConditions
 * @property AttributeAndCondition|null $AndCondition
 * @property TagCondition|null $TagCondition
 * @property HierarchyGroupCondition|null $HierarchyGroupCondition
 */
class ControlPlaneUserAttributeFilter extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<AttributeAndCondition>|null,
     *     AndCondition?: AttributeAndCondition|null,
     *     TagCondition?: TagCondition|null,
     *     HierarchyGroupCondition?: HierarchyGroupCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
