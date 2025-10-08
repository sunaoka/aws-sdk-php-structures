<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\BatchDeleteRumMetricDefinitions;

trait BatchDeleteRumMetricDefinitionsTrait
{
    /**
     * @param BatchDeleteRumMetricDefinitionsRequest $args
     * @return BatchDeleteRumMetricDefinitionsResponse
     */
    public function batchDeleteRumMetricDefinitions(BatchDeleteRumMetricDefinitionsRequest $args)
    {
        $result = parent::batchDeleteRumMetricDefinitions($args->toArray());
        return new BatchDeleteRumMetricDefinitionsResponse($result->toArray());
    }
}
