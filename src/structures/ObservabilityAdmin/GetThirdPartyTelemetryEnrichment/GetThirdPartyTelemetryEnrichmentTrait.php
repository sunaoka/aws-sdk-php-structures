<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetThirdPartyTelemetryEnrichment;

trait GetThirdPartyTelemetryEnrichmentTrait
{
    /**
     * @param GetThirdPartyTelemetryEnrichmentRequest $args
     * @return GetThirdPartyTelemetryEnrichmentResponse
     */
    public function getThirdPartyTelemetryEnrichment(GetThirdPartyTelemetryEnrichmentRequest $args)
    {
        $result = parent::getThirdPartyTelemetryEnrichment($args->toArray());
        return new GetThirdPartyTelemetryEnrichmentResponse($result->toArray());
    }
}
