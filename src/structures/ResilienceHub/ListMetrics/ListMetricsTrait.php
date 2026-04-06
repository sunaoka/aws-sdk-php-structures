<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListMetrics;

trait ListMetricsTrait
{
    /**
     * @param ListMetricsRequest $args
     * @return ListMetricsResponse
     */
    public function listMetrics(ListMetricsRequest $args)
    {
        $result = parent::listMetrics($args->toArray());
        return new ListMetricsResponse($result->toArray());
    }
}
