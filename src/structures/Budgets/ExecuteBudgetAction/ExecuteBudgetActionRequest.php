<?php

namespace Sunaoka\Aws\Structures\Budgets\ExecuteBudgetAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property string $ActionId
 * @property 'APPROVE_BUDGET_ACTION'|'RETRY_BUDGET_ACTION'|'REVERSE_BUDGET_ACTION'|'RESET_BUDGET_ACTION' $ExecutionType
 */
class ExecuteBudgetActionRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     ActionId: string,
     *     ExecutionType: 'APPROVE_BUDGET_ACTION'|'RETRY_BUDGET_ACTION'|'REVERSE_BUDGET_ACTION'|'RESET_BUDGET_ACTION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
