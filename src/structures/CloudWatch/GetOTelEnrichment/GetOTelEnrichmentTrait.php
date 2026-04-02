<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetOTelEnrichment;

trait GetOTelEnrichmentTrait
{
    /**
     * @param GetOTelEnrichmentRequest $args
     * @return GetOTelEnrichmentResponse
     */
    public function getOTelEnrichment(GetOTelEnrichmentRequest $args)
    {
        $result = parent::getOTelEnrichment($args->toArray());
        return new GetOTelEnrichmentResponse($result->toArray());
    }
}
