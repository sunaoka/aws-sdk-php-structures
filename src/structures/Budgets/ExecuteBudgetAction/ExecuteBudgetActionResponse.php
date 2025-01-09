<?php

namespace Sunaoka\Aws\Structures\Budgets\ExecuteBudgetAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property string $ActionId
 * @property 'APPROVE_BUDGET_ACTION'|'RETRY_BUDGET_ACTION'|'REVERSE_BUDGET_ACTION'|'RESET_BUDGET_ACTION' $ExecutionType
 */
class ExecuteBudgetActionResponse extends Response
{
}
