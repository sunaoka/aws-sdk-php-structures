<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetActionHistories;

trait DescribeBudgetActionHistoriesTrait
{
    /**
     * @param DescribeBudgetActionHistoriesRequest $args
     * @return DescribeBudgetActionHistoriesResponse
     */
    public function describeBudgetActionHistories(DescribeBudgetActionHistoriesRequest $args)
    {
        $result = parent::describeBudgetActionHistories($args->toArray());
        return new DescribeBudgetActionHistoriesResponse($result->toArray());
    }
}
