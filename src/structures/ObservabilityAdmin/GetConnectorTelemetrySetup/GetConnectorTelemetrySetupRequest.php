<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetrySetup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorIdentifier
 * @property 'BICEP'|null $Format
 */
class GetConnectorTelemetrySetupRequest extends Request
{
    /**
     * @param array{
     *     ConnectorIdentifier: string,
     *     Format?: 'BICEP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
