<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartTelemetryPipelineRefresh;

trait StartTelemetryPipelineRefreshTrait
{
    /**
     * @param StartTelemetryPipelineRefreshRequest $args
     * @return StartTelemetryPipelineRefreshResponse
     */
    public function startTelemetryPipelineRefresh(StartTelemetryPipelineRefreshRequest $args)
    {
        $result = parent::startTelemetryPipelineRefresh($args->toArray());
        return new StartTelemetryPipelineRefreshResponse($result->toArray());
    }
}
