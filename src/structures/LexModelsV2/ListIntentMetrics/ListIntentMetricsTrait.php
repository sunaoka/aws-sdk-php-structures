<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentMetrics;

trait ListIntentMetricsTrait
{
    /**
     * @param ListIntentMetricsRequest $args
     * @return ListIntentMetricsResponse
     */
    public function listIntentMetrics(ListIntentMetricsRequest $args)
    {
        $result = parent::listIntentMetrics($args->toArray());
        return new ListIntentMetricsResponse($result->toArray());
    }
}
