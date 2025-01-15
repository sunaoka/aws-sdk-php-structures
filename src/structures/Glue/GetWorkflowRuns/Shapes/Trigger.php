<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $WorkflowName
 * @property string|null $Id
 * @property 'SCHEDULED'|'CONDITIONAL'|'ON_DEMAND'|'EVENT'|null $Type
 * @property 'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVATED'|'DEACTIVATING'|'DEACTIVATED'|'DELETING'|'UPDATING'|null $State
 * @property string|null $Description
 * @property string|null $Schedule
 * @property list<Action>|null $Actions
 * @property Predicate|null $Predicate
 * @property EventBatchingCondition|null $EventBatchingCondition
 */
class Trigger extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     WorkflowName?: string|null,
     *     Id?: string|null,
     *     Type?: 'SCHEDULED'|'CONDITIONAL'|'ON_DEMAND'|'EVENT'|null,
     *     State?: 'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVATED'|'DEACTIVATING'|'DEACTIVATED'|'DELETING'|'UPDATING'|null,
     *     Description?: string|null,
     *     Schedule?: string|null,
     *     Actions?: list<Action>|null,
     *     Predicate?: Predicate|null,
     *     EventBatchingCondition?: EventBatchingCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
