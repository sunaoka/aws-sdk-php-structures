<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $WorkflowName
 * @property string $Id
 * @property 'SCHEDULED'|'CONDITIONAL'|'ON_DEMAND'|'EVENT' $Type
 * @property 'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVATED'|'DEACTIVATING'|'DEACTIVATED'|'DELETING'|'UPDATING' $State
 * @property string $Description
 * @property string $Schedule
 * @property list<Action> $Actions
 * @property Predicate $Predicate
 * @property EventBatchingCondition $EventBatchingCondition
 */
class Trigger extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     WorkflowName?: string,
     *     Id?: string,
     *     Type?: 'SCHEDULED'|'CONDITIONAL'|'ON_DEMAND'|'EVENT',
     *     State?: 'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVATED'|'DEACTIVATING'|'DEACTIVATED'|'DELETING'|'UPDATING',
     *     Description?: string,
     *     Schedule?: string,
     *     Actions?: list<Action>,
     *     Predicate?: Predicate,
     *     EventBatchingCondition?: EventBatchingCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
