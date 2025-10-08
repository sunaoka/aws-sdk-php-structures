<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics;

trait ListUtteranceMetricsTrait
{
    /**
     * @param ListUtteranceMetricsRequest $args
     * @return ListUtteranceMetricsResponse
     */
    public function listUtteranceMetrics(ListUtteranceMetricsRequest $args)
    {
        $result = parent::listUtteranceMetrics($args->toArray());
        return new ListUtteranceMetricsResponse($result->toArray());
    }
}
