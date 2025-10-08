<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\ListFindingsMetrics;

trait ListFindingsMetricsTrait
{
    /**
     * @param ListFindingsMetricsRequest $args
     * @return ListFindingsMetricsResponse
     */
    public function listFindingsMetrics(ListFindingsMetricsRequest $args)
    {
        $result = parent::listFindingsMetrics($args->toArray());
        return new ListFindingsMetricsResponse($result->toArray());
    }
}
