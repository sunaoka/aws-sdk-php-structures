<?php

namespace Sunaoka\Aws\Structures\Connect\SearchWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WorkspaceSearchCriteria>|null $OrConditions
 * @property list<WorkspaceSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class WorkspaceSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<WorkspaceSearchCriteria>|null,
     *     AndConditions?: list<WorkspaceSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
