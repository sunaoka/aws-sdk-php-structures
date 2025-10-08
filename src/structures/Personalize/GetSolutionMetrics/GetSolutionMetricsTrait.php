<?php

namespace Sunaoka\Aws\Structures\Personalize\GetSolutionMetrics;

trait GetSolutionMetricsTrait
{
    /**
     * @param GetSolutionMetricsRequest $args
     * @return GetSolutionMetricsResponse
     */
    public function getSolutionMetrics(GetSolutionMetricsRequest $args)
    {
        $result = parent::getSolutionMetrics($args->toArray());
        return new GetSolutionMetricsResponse($result->toArray());
    }
}
