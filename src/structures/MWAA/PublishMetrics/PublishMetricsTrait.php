<?php

namespace Sunaoka\Aws\Structures\MWAA\PublishMetrics;

trait PublishMetricsTrait
{
    /**
     * @param PublishMetricsRequest $args
     * @return PublishMetricsResponse
     */
    public function publishMetrics(PublishMetricsRequest $args)
    {
        $result = parent::publishMetrics($args->toArray());
        return new PublishMetricsResponse($result->toArray());
    }
}
