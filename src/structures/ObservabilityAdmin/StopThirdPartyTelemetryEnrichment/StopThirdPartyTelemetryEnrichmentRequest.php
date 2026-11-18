<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StopThirdPartyTelemetryEnrichment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TelemetryEnrichmentIdentifier
 */
class StopThirdPartyTelemetryEnrichmentRequest extends Request
{
    /**
     * @param array{TelemetryEnrichmentIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
