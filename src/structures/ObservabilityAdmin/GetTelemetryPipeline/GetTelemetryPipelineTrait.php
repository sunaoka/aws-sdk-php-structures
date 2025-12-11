<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryPipeline;

trait GetTelemetryPipelineTrait
{
    /**
     * @param GetTelemetryPipelineRequest $args
     * @return GetTelemetryPipelineResponse
     */
    public function getTelemetryPipeline(GetTelemetryPipelineRequest $args)
    {
        $result = parent::getTelemetryPipeline($args->toArray());
        return new GetTelemetryPipelineResponse($result->toArray());
    }
}
