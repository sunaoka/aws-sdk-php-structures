<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionsForBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeBudgetActionsForBudgetRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
