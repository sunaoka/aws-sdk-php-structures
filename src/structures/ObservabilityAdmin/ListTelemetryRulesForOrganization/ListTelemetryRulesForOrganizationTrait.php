<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListTelemetryRulesForOrganization;

trait ListTelemetryRulesForOrganizationTrait
{
    /**
     * @param ListTelemetryRulesForOrganizationRequest $args
     * @return ListTelemetryRulesForOrganizationResponse
     */
    public function listTelemetryRulesForOrganization(ListTelemetryRulesForOrganizationRequest $args)
    {
        $result = parent::listTelemetryRulesForOrganization($args->toArray());
        return new ListTelemetryRulesForOrganizationResponse($result->toArray());
    }
}
