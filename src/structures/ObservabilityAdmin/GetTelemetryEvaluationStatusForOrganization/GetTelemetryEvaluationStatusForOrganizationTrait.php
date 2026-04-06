<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryEvaluationStatusForOrganization;

trait GetTelemetryEvaluationStatusForOrganizationTrait
{
    /**
     * @return GetTelemetryEvaluationStatusForOrganizationResponse
     */
    public function getTelemetryEvaluationStatusForOrganization()
    {
        $result = parent::getTelemetryEvaluationStatusForOrganization();
        return new GetTelemetryEvaluationStatusForOrganizationResponse($result->toArray());
    }
}
