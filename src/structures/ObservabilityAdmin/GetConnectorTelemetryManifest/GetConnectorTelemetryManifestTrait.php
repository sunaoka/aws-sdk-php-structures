<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetryManifest;

trait GetConnectorTelemetryManifestTrait
{
    /**
     * @param GetConnectorTelemetryManifestRequest $args
     * @return GetConnectorTelemetryManifestResponse
     */
    public function getConnectorTelemetryManifest(GetConnectorTelemetryManifestRequest $args)
    {
        $result = parent::getConnectorTelemetryManifest($args->toArray());
        return new GetConnectorTelemetryManifestResponse($result->toArray());
    }
}
