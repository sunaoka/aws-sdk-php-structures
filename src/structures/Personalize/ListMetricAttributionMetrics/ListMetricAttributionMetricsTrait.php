<?php

namespace Sunaoka\Aws\Structures\Personalize\ListMetricAttributionMetrics;

trait ListMetricAttributionMetricsTrait
{
    /**
     * @param ListMetricAttributionMetricsRequest $args
     * @return ListMetricAttributionMetricsResponse
     */
    public function listMetricAttributionMetrics(ListMetricAttributionMetricsRequest $args)
    {
        $result = parent::listMetricAttributionMetrics($args->toArray());
        return new ListMetricAttributionMetricsResponse($result->toArray());
    }
}
