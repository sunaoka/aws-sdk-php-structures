<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetThirdPartyTelemetryEnrichment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TelemetryEnrichmentIdentifier
 */
class GetThirdPartyTelemetryEnrichmentRequest extends Request
{
    /**
     * @param array{TelemetryEnrichmentIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
