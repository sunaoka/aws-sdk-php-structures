<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteTelemetryPipeline;

trait DeleteTelemetryPipelineTrait
{
    /**
     * @param DeleteTelemetryPipelineRequest $args
     * @return DeleteTelemetryPipelineResponse
     */
    public function deleteTelemetryPipeline(DeleteTelemetryPipelineRequest $args)
    {
        $result = parent::deleteTelemetryPipeline($args->toArray());
        return new DeleteTelemetryPipelineResponse($result->toArray());
    }
}
