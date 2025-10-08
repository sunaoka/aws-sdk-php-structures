<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupRelatedMetrics;

trait ListAnomalyGroupRelatedMetricsTrait
{
    /**
     * @param ListAnomalyGroupRelatedMetricsRequest $args
     * @return ListAnomalyGroupRelatedMetricsResponse
     */
    public function listAnomalyGroupRelatedMetrics(ListAnomalyGroupRelatedMetricsRequest $args)
    {
        $result = parent::listAnomalyGroupRelatedMetrics($args->toArray());
        return new ListAnomalyGroupRelatedMetricsResponse($result->toArray());
    }
}
