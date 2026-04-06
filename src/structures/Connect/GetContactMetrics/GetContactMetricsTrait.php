<?php

namespace Sunaoka\Aws\Structures\Connect\GetContactMetrics;

trait GetContactMetricsTrait
{
    /**
     * @param GetContactMetricsRequest $args
     * @return GetContactMetricsResponse
     */
    public function getContactMetrics(GetContactMetricsRequest $args)
    {
        $result = parent::getContactMetrics($args->toArray());
        return new GetContactMetricsResponse($result->toArray());
    }
}
