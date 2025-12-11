<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\TestTelemetryPipeline;

trait TestTelemetryPipelineTrait
{
    /**
     * @param TestTelemetryPipelineRequest $args
     * @return TestTelemetryPipelineResponse
     */
    public function testTelemetryPipeline(TestTelemetryPipelineRequest $args)
    {
        $result = parent::testTelemetryPipeline($args->toArray());
        return new TestTelemetryPipelineResponse($result->toArray());
    }
}
