<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetryManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorIdentifier
 */
class GetConnectorTelemetryManifestRequest extends Request
{
    /**
     * @param array{ConnectorIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
