<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribePendingAggregationRequests;

trait DescribePendingAggregationRequestsTrait
{
    /**
     * @param DescribePendingAggregationRequestsRequest $args
     * @return DescribePendingAggregationRequestsResponse
     */
    public function describePendingAggregationRequests(DescribePendingAggregationRequestsRequest $args)
    {
        $result = parent::describePendingAggregationRequests($args->toArray());
        return new DescribePendingAggregationRequestsResponse($result->toArray());
    }
}
