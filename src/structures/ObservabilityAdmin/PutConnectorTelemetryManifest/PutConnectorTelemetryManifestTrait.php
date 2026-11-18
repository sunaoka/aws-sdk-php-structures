<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\PutConnectorTelemetryManifest;

trait PutConnectorTelemetryManifestTrait
{
    /**
     * @param PutConnectorTelemetryManifestRequest $args
     * @return PutConnectorTelemetryManifestResponse
     */
    public function putConnectorTelemetryManifest(PutConnectorTelemetryManifestRequest $args)
    {
        $result = parent::putConnectorTelemetryManifest($args->toArray());
        return new PutConnectorTelemetryManifestResponse($result->toArray());
    }
}
