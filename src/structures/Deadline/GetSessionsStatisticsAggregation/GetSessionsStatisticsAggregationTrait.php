<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation;

trait GetSessionsStatisticsAggregationTrait
{
    /**
     * @param GetSessionsStatisticsAggregationRequest $args
     * @return GetSessionsStatisticsAggregationResponse
     */
    public function getSessionsStatisticsAggregation(GetSessionsStatisticsAggregationRequest $args)
    {
        $result = parent::getSessionsStatisticsAggregation($args->toArray());
        return new GetSessionsStatisticsAggregationResponse($result->toArray());
    }
}
