<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeNotificationsForBudget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeNotificationsForBudgetRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
