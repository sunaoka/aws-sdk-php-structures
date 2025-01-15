<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetPerformanceHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property Shapes\TimePeriod|null $TimePeriod
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeBudgetPerformanceHistoryRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     TimePeriod?: Shapes\TimePeriod|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
