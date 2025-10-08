<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryRuleForOrganization;

trait CreateTelemetryRuleForOrganizationTrait
{
    /**
     * @param CreateTelemetryRuleForOrganizationRequest $args
     * @return CreateTelemetryRuleForOrganizationResponse
     */
    public function createTelemetryRuleForOrganization(CreateTelemetryRuleForOrganizationRequest $args)
    {
        $result = parent::createTelemetryRuleForOrganization($args->toArray());
        return new CreateTelemetryRuleForOrganizationResponse($result->toArray());
    }
}
