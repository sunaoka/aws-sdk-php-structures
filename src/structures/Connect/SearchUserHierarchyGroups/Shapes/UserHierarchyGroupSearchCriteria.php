<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUserHierarchyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UserHierarchyGroupSearchCriteria> $OrConditions
 * @property list<UserHierarchyGroupSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 */
class UserHierarchyGroupSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<UserHierarchyGroupSearchCriteria>,
     *     AndConditions?: list<UserHierarchyGroupSearchCriteria>,
     *     StringCondition?: StringCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
