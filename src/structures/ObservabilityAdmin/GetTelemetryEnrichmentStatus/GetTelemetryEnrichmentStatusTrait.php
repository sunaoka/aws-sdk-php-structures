<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryEnrichmentStatus;

trait GetTelemetryEnrichmentStatusTrait
{
    /**
     * @return GetTelemetryEnrichmentStatusResponse
     */
    public function getTelemetryEnrichmentStatus()
    {
        $result = parent::getTelemetryEnrichmentStatus();
        return new GetTelemetryEnrichmentStatusResponse($result->toArray());
    }
}
