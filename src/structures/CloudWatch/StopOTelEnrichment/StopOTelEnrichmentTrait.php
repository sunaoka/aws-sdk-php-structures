<?php

namespace Sunaoka\Aws\Structures\CloudWatch\StopOTelEnrichment;

trait StopOTelEnrichmentTrait
{
    /**
     * @param StopOTelEnrichmentRequest $args
     * @return StopOTelEnrichmentResponse
     */
    public function stopOTelEnrichment(StopOTelEnrichmentRequest $args)
    {
        $result = parent::stopOTelEnrichment($args->toArray());
        return new StopOTelEnrichmentResponse($result->toArray());
    }
}
