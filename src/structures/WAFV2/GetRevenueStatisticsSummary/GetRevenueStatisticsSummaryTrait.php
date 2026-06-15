<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRevenueStatisticsSummary;

trait GetRevenueStatisticsSummaryTrait
{
    /**
     * @param GetRevenueStatisticsSummaryRequest $args
     * @return GetRevenueStatisticsSummaryResponse
     */
    public function getRevenueStatisticsSummary(GetRevenueStatisticsSummaryRequest $args)
    {
        $result = parent::getRevenueStatisticsSummary($args->toArray());
        return new GetRevenueStatisticsSummaryResponse($result->toArray());
    }
}
