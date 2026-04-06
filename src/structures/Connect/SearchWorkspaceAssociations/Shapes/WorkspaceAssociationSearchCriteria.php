<?php

namespace Sunaoka\Aws\Structures\Connect\SearchWorkspaceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WorkspaceAssociationSearchCriteria>|null $OrConditions
 * @property list<WorkspaceAssociationSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class WorkspaceAssociationSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<WorkspaceAssociationSearchCriteria>|null,
     *     AndConditions?: list<WorkspaceAssociationSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
