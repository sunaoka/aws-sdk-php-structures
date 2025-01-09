<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UserSearchCriteria> $OrConditions
 * @property list<UserSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 * @property ListCondition $ListCondition
 * @property HierarchyGroupCondition $HierarchyGroupCondition
 */
class UserSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<UserSearchCriteria>,
     *     AndConditions?: list<UserSearchCriteria>,
     *     StringCondition?: StringCondition,
     *     ListCondition?: ListCondition,
     *     HierarchyGroupCondition?: HierarchyGroupCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
