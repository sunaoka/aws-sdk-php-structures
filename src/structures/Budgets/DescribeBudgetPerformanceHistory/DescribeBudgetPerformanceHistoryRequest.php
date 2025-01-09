<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetPerformanceHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property Shapes\TimePeriod $TimePeriod
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeBudgetPerformanceHistoryRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     TimePeriod?: Shapes\TimePeriod,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
