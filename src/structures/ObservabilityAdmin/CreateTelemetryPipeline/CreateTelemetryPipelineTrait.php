<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryPipeline;

trait CreateTelemetryPipelineTrait
{
    /**
     * @param CreateTelemetryPipelineRequest $args
     * @return CreateTelemetryPipelineResponse
     */
    public function createTelemetryPipeline(CreateTelemetryPipelineRequest $args)
    {
        $result = parent::createTelemetryPipeline($args->toArray());
        return new CreateTelemetryPipelineResponse($result->toArray());
    }
}
