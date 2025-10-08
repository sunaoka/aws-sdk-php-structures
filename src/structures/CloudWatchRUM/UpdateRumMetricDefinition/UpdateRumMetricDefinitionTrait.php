<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\UpdateRumMetricDefinition;

trait UpdateRumMetricDefinitionTrait
{
    /**
     * @param UpdateRumMetricDefinitionRequest $args
     * @return UpdateRumMetricDefinitionResponse
     */
    public function updateRumMetricDefinition(UpdateRumMetricDefinitionRequest $args)
    {
        $result = parent::updateRumMetricDefinition($args->toArray());
        return new UpdateRumMetricDefinitionResponse($result->toArray());
    }
}
