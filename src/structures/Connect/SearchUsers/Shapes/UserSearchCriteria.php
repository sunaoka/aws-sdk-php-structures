<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UserSearchCriteria>|null $OrConditions
 * @property list<UserSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 * @property ListCondition|null $ListCondition
 * @property HierarchyGroupCondition|null $HierarchyGroupCondition
 */
class UserSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<UserSearchCriteria>|null,
     *     AndConditions?: list<UserSearchCriteria>|null,
     *     StringCondition?: StringCondition|null,
     *     ListCondition?: ListCondition|null,
     *     HierarchyGroupCondition?: HierarchyGroupCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
