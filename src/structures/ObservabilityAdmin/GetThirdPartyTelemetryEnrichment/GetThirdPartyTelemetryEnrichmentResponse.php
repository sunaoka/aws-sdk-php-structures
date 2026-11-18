<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetThirdPartyTelemetryEnrichment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string $Name
 * @property 'Initializing'|'Running'|'Stopped'|'Impaired' $Status
 * @property string|null $StatusReason
 * @property Shapes\TelemetrySourceConfigurationOutput $TelemetrySourceConfiguration
 * @property array<string, string>|null $Tags
 */
class GetThirdPartyTelemetryEnrichmentResponse extends Response
{
}
