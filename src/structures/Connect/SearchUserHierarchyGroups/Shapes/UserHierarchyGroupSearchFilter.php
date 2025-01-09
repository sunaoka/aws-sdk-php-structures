<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUserHierarchyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ControlPlaneAttributeFilter $AttributeFilter
 */
class UserHierarchyGroupSearchFilter extends Shape
{
    /**
     * @param array{AttributeFilter?: ControlPlaneAttributeFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
