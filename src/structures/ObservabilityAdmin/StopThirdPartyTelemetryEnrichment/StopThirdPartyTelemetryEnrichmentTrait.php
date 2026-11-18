<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StopThirdPartyTelemetryEnrichment;

trait StopThirdPartyTelemetryEnrichmentTrait
{
    /**
     * @param StopThirdPartyTelemetryEnrichmentRequest $args
     * @return StopThirdPartyTelemetryEnrichmentResponse
     */
    public function stopThirdPartyTelemetryEnrichment(StopThirdPartyTelemetryEnrichmentRequest $args)
    {
        $result = parent::stopThirdPartyTelemetryEnrichment($args->toArray());
        return new StopThirdPartyTelemetryEnrichmentResponse($result->toArray());
    }
}
