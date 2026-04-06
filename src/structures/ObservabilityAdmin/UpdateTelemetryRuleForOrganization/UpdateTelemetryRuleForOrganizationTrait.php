<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateTelemetryRuleForOrganization;

trait UpdateTelemetryRuleForOrganizationTrait
{
    /**
     * @param UpdateTelemetryRuleForOrganizationRequest $args
     * @return UpdateTelemetryRuleForOrganizationResponse
     */
    public function updateTelemetryRuleForOrganization(UpdateTelemetryRuleForOrganizationRequest $args)
    {
        $result = parent::updateTelemetryRuleForOrganization($args->toArray());
        return new UpdateTelemetryRuleForOrganizationResponse($result->toArray());
    }
}
