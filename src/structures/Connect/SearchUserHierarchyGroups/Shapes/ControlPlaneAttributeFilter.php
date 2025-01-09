<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUserHierarchyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CommonAttributeAndCondition> $OrConditions
 * @property CommonAttributeAndCondition $AndCondition
 * @property TagCondition $TagCondition
 */
class ControlPlaneAttributeFilter extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<CommonAttributeAndCondition>,
     *     AndCondition?: CommonAttributeAndCondition,
     *     TagCondition?: TagCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
