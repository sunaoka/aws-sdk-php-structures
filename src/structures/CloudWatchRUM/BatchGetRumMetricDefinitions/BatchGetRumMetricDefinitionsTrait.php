<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchGetRumMetricDefinitions;

trait BatchGetRumMetricDefinitionsTrait
{
    /**
     * @param BatchGetRumMetricDefinitionsRequest $args
     * @return BatchGetRumMetricDefinitionsResponse
     */
    public function batchGetRumMetricDefinitions(BatchGetRumMetricDefinitionsRequest $args)
    {
        $result = parent::batchGetRumMetricDefinitions($args->toArray());
        return new BatchGetRumMetricDefinitionsResponse($result->toArray());
    }
}
