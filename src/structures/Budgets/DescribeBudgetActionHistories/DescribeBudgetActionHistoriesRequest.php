<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionHistories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BudgetName
 * @property string $ActionId
 * @property Shapes\TimePeriod|null $TimePeriod
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeBudgetActionHistoriesRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BudgetName: string,
     *     ActionId: string,
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
