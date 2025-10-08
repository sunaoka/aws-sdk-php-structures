<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntentStageMetrics;

trait ListIntentStageMetricsTrait
{
    /**
     * @param ListIntentStageMetricsRequest $args
     * @return ListIntentStageMetricsResponse
     */
    public function listIntentStageMetrics(ListIntentStageMetricsRequest $args)
    {
        $result = parent::listIntentStageMetrics($args->toArray());
        return new ListIntentStageMetricsResponse($result->toArray());
    }
}
