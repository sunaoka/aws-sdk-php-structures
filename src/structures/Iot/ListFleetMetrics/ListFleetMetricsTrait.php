<?php

namespace Sunaoka\Aws\Structures\Iot\ListFleetMetrics;

trait ListFleetMetricsTrait
{
    /**
     * @param ListFleetMetricsRequest $args
     * @return ListFleetMetricsResponse
     */
    public function listFleetMetrics(ListFleetMetricsRequest $args)
    {
        $result = parent::listFleetMetrics($args->toArray());
        return new ListFleetMetricsResponse($result->toArray());
    }
}
