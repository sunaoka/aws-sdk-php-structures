<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionHistories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property string $ActionId
 * @property Shapes\TimePeriod $TimePeriod
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeBudgetActionHistoriesRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     ActionId: string,
     *     TimePeriod?: Shapes\TimePeriod,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
