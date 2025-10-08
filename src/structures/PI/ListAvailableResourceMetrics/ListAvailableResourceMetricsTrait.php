<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceMetrics;

trait ListAvailableResourceMetricsTrait
{
    /**
     * @param ListAvailableResourceMetricsRequest $args
     * @return ListAvailableResourceMetricsResponse
     */
    public function listAvailableResourceMetrics(ListAvailableResourceMetricsRequest $args)
    {
        $result = parent::listAvailableResourceMetrics($args->toArray());
        return new ListAvailableResourceMetricsResponse($result->toArray());
    }
}
