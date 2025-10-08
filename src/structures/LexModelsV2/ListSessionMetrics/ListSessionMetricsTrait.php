<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics;

trait ListSessionMetricsTrait
{
    /**
     * @param ListSessionMetricsRequest $args
     * @return ListSessionMetricsResponse
     */
    public function listSessionMetrics(ListSessionMetricsRequest $args)
    {
        $result = parent::listSessionMetrics($args->toArray());
        return new ListSessionMetricsResponse($result->toArray());
    }
}
