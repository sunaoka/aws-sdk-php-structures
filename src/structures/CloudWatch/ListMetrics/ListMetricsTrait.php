<?php

namespace Sunaoka\Aws\Structures\CloudWatch\ListMetrics;

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
