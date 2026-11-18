<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetrySetup;

trait GetConnectorTelemetrySetupTrait
{
    /**
     * @param GetConnectorTelemetrySetupRequest $args
     * @return GetConnectorTelemetrySetupResponse
     */
    public function getConnectorTelemetrySetup(GetConnectorTelemetrySetupRequest $args)
    {
        $result = parent::getConnectorTelemetrySetup($args->toArray());
        return new GetConnectorTelemetrySetupResponse($result->toArray());
    }
}
