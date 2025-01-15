<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUserHierarchyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UserHierarchyGroupSearchCriteria>|null $OrConditions
 * @property list<UserHierarchyGroupSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class UserHierarchyGroupSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<UserHierarchyGroupSearchCriteria>|null,
     *     AndConditions?: list<UserHierarchyGroupSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
