<?php

namespace Sunaoka\Aws\Structures\Iot\ListCustomMetrics;

trait ListCustomMetricsTrait
{
    /**
     * @param ListCustomMetricsRequest $args
     * @return ListCustomMetricsResponse
     */
    public function listCustomMetrics(ListCustomMetricsRequest $args)
    {
        $result = parent::listCustomMetrics($args->toArray());
        return new ListCustomMetricsResponse($result->toArray());
    }
}
