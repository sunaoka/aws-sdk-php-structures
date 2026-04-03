<?php

namespace Sunaoka\Aws\Structures\CloudWatch\StartOTelEnrichment;

trait StartOTelEnrichmentTrait
{
    /**
     * @param StartOTelEnrichmentRequest $args
     * @return StartOTelEnrichmentResponse
     */
    public function startOTelEnrichment(StartOTelEnrichmentRequest $args)
    {
        $result = parent::startOTelEnrichment($args->toArray());
        return new StartOTelEnrichmentResponse($result->toArray());
    }
}
