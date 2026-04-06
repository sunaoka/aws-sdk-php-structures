<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourceTelemetryForOrganization;

trait ListResourceTelemetryForOrganizationTrait
{
    /**
     * @param ListResourceTelemetryForOrganizationRequest $args
     * @return ListResourceTelemetryForOrganizationResponse
     */
    public function listResourceTelemetryForOrganization(ListResourceTelemetryForOrganizationRequest $args)
    {
        $result = parent::listResourceTelemetryForOrganization($args->toArray());
        return new ListResourceTelemetryForOrganizationResponse($result->toArray());
    }
}
