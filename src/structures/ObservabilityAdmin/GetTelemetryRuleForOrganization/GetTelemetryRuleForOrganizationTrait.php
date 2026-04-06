<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRuleForOrganization;

trait GetTelemetryRuleForOrganizationTrait
{
    /**
     * @param GetTelemetryRuleForOrganizationRequest $args
     * @return GetTelemetryRuleForOrganizationResponse
     */
    public function getTelemetryRuleForOrganization(GetTelemetryRuleForOrganizationRequest $args)
    {
        $result = parent::getTelemetryRuleForOrganization($args->toArray());
        return new GetTelemetryRuleForOrganizationResponse($result->toArray());
    }
}
