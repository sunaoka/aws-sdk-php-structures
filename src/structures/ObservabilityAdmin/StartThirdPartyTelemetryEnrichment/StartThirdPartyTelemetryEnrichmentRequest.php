<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartThirdPartyTelemetryEnrichment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\TelemetrySourceConfigurationInput $TelemetrySourceConfiguration
 * @property array<string, string>|null $Tags
 */
class StartThirdPartyTelemetryEnrichmentRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     TelemetrySourceConfiguration: Shapes\TelemetrySourceConfigurationInput,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
