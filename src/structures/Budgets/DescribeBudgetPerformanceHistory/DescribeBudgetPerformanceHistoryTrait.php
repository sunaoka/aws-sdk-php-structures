<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeBudgetPerformanceHistory;

trait DescribeBudgetPerformanceHistoryTrait
{
    /**
     * @param DescribeBudgetPerformanceHistoryRequest $args
     * @return DescribeBudgetPerformanceHistoryResponse
     */
    public function describeBudgetPerformanceHistory(DescribeBudgetPerformanceHistoryRequest $args)
    {
        $result = parent::describeBudgetPerformanceHistory($args->toArray());
        return new DescribeBudgetPerformanceHistoryResponse($result->toArray());
    }
}
