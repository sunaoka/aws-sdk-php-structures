<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTrigger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $WorkflowName
 * @property 'SCHEDULED'|'CONDITIONAL'|'ON_DEMAND'|'EVENT' $Type
 * @property string $Schedule
 * @property Shapes\Predicate $Predicate
 * @property list<Shapes\Action> $Actions
 * @property string $Description
 * @property bool $StartOnCreation
 * @property array<string, string> $Tags
 * @property Shapes\EventBatchingCondition $EventBatchingCondition
 */
class CreateTriggerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     WorkflowName?: string,
     *     Type: 'SCHEDULED'|'CONDITIONAL'|'ON_DEMAND'|'EVENT',
     *     Schedule?: string,
     *     Predicate?: Shapes\Predicate,
     *     Actions: list<Shapes\Action>,
     *     Description?: string,
     *     StartOnCreation?: bool,
     *     Tags?: array<string, string>,
     *     EventBatchingCondition?: Shapes\EventBatchingCondition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
