<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlerMetrics;

trait GetCrawlerMetricsTrait
{
    /**
     * @param GetCrawlerMetricsRequest $args
     * @return GetCrawlerMetricsResponse
     */
    public function getCrawlerMetrics(GetCrawlerMetricsRequest $args)
    {
        $result = parent::getCrawlerMetrics($args->toArray());
        return new GetCrawlerMetricsResponse($result->toArray());
    }
}
