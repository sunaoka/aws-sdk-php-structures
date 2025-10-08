<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary;

trait GetMetricsSummaryTrait
{
    /**
     * @param GetMetricsSummaryRequest $args
     * @return GetMetricsSummaryResponse
     */
    public function getMetricsSummary(GetMetricsSummaryRequest $args)
    {
        $result = parent::getMetricsSummary($args->toArray());
        return new GetMetricsSummaryResponse($result->toArray());
    }
}
