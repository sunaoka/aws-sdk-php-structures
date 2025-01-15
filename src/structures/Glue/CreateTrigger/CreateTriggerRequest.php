<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTrigger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $WorkflowName
 * @property 'SCHEDULED'|'CONDITIONAL'|'ON_DEMAND'|'EVENT' $Type
 * @property string|null $Schedule
 * @property Shapes\Predicate|null $Predicate
 * @property list<Shapes\Action> $Actions
 * @property string|null $Description
 * @property bool|null $StartOnCreation
 * @property array<string, string>|null $Tags
 * @property Shapes\EventBatchingCondition|null $EventBatchingCondition
 */
class CreateTriggerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     WorkflowName?: string|null,
     *     Type: 'SCHEDULED'|'CONDITIONAL'|'ON_DEMAND'|'EVENT',
     *     Schedule?: string|null,
     *     Predicate?: Shapes\Predicate|null,
     *     Actions: list<Shapes\Action>,
     *     Description?: string|null,
     *     StartOnCreation?: bool|null,
     *     Tags?: array<string, string>|null,
     *     EventBatchingCondition?: Shapes\EventBatchingCondition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
