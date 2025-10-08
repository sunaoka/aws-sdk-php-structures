<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteTelemetryRuleForOrganization;

trait DeleteTelemetryRuleForOrganizationTrait
{
    /**
     * @param DeleteTelemetryRuleForOrganizationRequest $args
     * @return void
     */
    public function deleteTelemetryRuleForOrganization(DeleteTelemetryRuleForOrganizationRequest $args)
    {
        parent::deleteTelemetryRuleForOrganization($args->toArray());
    }
}
