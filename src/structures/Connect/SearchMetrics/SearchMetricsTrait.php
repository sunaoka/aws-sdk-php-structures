<?php

namespace Sunaoka\Aws\Structures\Connect\SearchMetrics;

trait SearchMetricsTrait
{
    /**
     * @param SearchMetricsRequest $args
     * @return SearchMetricsResponse
     */
    public function searchMetrics(SearchMetricsRequest $args)
    {
        $result = parent::searchMetrics($args->toArray());
        return new SearchMetricsResponse($result->toArray());
    }
}
