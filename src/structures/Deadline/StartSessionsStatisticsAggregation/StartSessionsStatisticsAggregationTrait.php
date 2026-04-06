<?php

namespace Sunaoka\Aws\Structures\Deadline\StartSessionsStatisticsAggregation;

trait StartSessionsStatisticsAggregationTrait
{
    /**
     * @param StartSessionsStatisticsAggregationRequest $args
     * @return StartSessionsStatisticsAggregationResponse
     */
    public function startSessionsStatisticsAggregation(StartSessionsStatisticsAggregationRequest $args)
    {
        $result = parent::startSessionsStatisticsAggregation($args->toArray());
        return new StartSessionsStatisticsAggregationResponse($result->toArray());
    }
}
