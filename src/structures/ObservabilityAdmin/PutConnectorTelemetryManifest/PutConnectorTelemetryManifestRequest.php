<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\PutConnectorTelemetryManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorIdentifier
 * @property Shapes\TelemetryManifest $Manifest
 * @property int|null $ExpectedVersion
 * @property string|null $ClientToken
 */
class PutConnectorTelemetryManifestRequest extends Request
{
    /**
     * @param array{
     *     ConnectorIdentifier: string,
     *     Manifest: Shapes\TelemetryManifest,
     *     ExpectedVersion?: int|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
