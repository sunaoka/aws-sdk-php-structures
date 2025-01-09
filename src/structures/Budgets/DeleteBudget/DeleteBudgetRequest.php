<?php

namespace Sunaoka\Aws\Structures\Budgets\DeleteBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 */
class DeleteBudgetRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
