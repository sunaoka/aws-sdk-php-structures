<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchCreateRumMetricDefinitions;

trait BatchCreateRumMetricDefinitionsTrait
{
    /**
     * @param BatchCreateRumMetricDefinitionsRequest $args
     * @return BatchCreateRumMetricDefinitionsResponse
     */
    public function batchCreateRumMetricDefinitions(BatchCreateRumMetricDefinitionsRequest $args)
    {
        $result = parent::batchCreateRumMetricDefinitions($args->toArray());
        return new BatchCreateRumMetricDefinitionsResponse($result->toArray());
    }
}
