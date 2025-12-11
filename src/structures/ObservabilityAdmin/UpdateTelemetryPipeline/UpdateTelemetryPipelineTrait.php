<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateTelemetryPipeline;

trait UpdateTelemetryPipelineTrait
{
    /**
     * @param UpdateTelemetryPipelineRequest $args
     * @return UpdateTelemetryPipelineResponse
     */
    public function updateTelemetryPipeline(UpdateTelemetryPipelineRequest $args)
    {
        $result = parent::updateTelemetryPipeline($args->toArray());
        return new UpdateTelemetryPipelineResponse($result->toArray());
    }
}
