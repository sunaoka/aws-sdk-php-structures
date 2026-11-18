<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartThirdPartyTelemetryEnrichment;

trait StartThirdPartyTelemetryEnrichmentTrait
{
    /**
     * @param StartThirdPartyTelemetryEnrichmentRequest $args
     * @return StartThirdPartyTelemetryEnrichmentResponse
     */
    public function startThirdPartyTelemetryEnrichment(StartThirdPartyTelemetryEnrichmentRequest $args)
    {
        $result = parent::startThirdPartyTelemetryEnrichment($args->toArray());
        return new StartThirdPartyTelemetryEnrichmentResponse($result->toArray());
    }
}
