<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartTelemetryEvaluationForOrganization;

trait StartTelemetryEvaluationForOrganizationTrait
{
    /**
     * @param StartTelemetryEvaluationForOrganizationRequest $args
     * @return void
     */
    public function startTelemetryEvaluationForOrganization(StartTelemetryEvaluationForOrganizationRequest $args)
    {
        parent::startTelemetryEvaluationForOrganization($args->toArray());
    }
}
