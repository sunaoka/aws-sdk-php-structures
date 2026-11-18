<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StopThirdPartyTelemetryEnrichment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property 'Azure' $TelemetrySource
 * @property 'Initializing'|'Running'|'Stopped'|'Impaired' $Status
 * @property string|null $StatusReason
 */
class StopThirdPartyTelemetryEnrichmentResponse extends Response
{
}
