<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartTelemetryEnrichment;

trait StartTelemetryEnrichmentTrait
{
    /**
     * @return StartTelemetryEnrichmentResponse
     */
    public function startTelemetryEnrichment()
    {
        $result = parent::startTelemetryEnrichment();
        return new StartTelemetryEnrichmentResponse($result->toArray());
    }
}
