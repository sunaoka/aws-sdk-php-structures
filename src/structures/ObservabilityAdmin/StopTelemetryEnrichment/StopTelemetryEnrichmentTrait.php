<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StopTelemetryEnrichment;

trait StopTelemetryEnrichmentTrait
{
    /**
     * @return StopTelemetryEnrichmentResponse
     */
    public function stopTelemetryEnrichment()
    {
        $result = parent::stopTelemetryEnrichment();
        return new StopTelemetryEnrichmentResponse($result->toArray());
    }
}
