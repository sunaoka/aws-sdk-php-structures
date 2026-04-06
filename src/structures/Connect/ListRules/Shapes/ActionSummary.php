<?php

namespace Sunaoka\Aws\Structures\Connect\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_TASK'|'ASSIGN_CONTACT_CATEGORY'|'GENERATE_EVENTBRIDGE_EVENT'|'SEND_NOTIFICATION'|'CREATE_CASE'|'UPDATE_CASE'|'ASSIGN_SLA'|'END_ASSOCIATED_TASKS'|'SUBMIT_AUTO_EVALUATION' $ActionType
 */
class ActionSummary extends Shape
{
    /**
     * @param array{ActionType: 'CREATE_TASK'|'ASSIGN_CONTACT_CATEGORY'|'GENERATE_EVENTBRIDGE_EVENT'|'SEND_NOTIFICATION'|'CREATE_CASE'|'UPDATE_CASE'|'ASSIGN_SLA'|'END_ASSOCIATED_TASKS'|'SUBMIT_AUTO_EVALUATION'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
