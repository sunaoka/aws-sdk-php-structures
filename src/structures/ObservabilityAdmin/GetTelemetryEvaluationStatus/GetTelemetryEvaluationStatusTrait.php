<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryEvaluationStatus;

trait GetTelemetryEvaluationStatusTrait
{
    /**
     * @return GetTelemetryEvaluationStatusResponse
     */
    public function getTelemetryEvaluationStatus()
    {
        $result = parent::getTelemetryEvaluationStatus();
        return new GetTelemetryEvaluationStatusResponse($result->toArray());
    }
}
