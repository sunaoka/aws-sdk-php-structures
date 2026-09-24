<?php

namespace Sunaoka\Aws\Structures\CloudWatch\UpdateOTelEnrichment;

trait UpdateOTelEnrichmentTrait
{
    /**
     * @param UpdateOTelEnrichmentRequest $args
     * @return UpdateOTelEnrichmentResponse
     */
    public function updateOTelEnrichment(UpdateOTelEnrichmentRequest $args)
    {
        $result = parent::updateOTelEnrichment($args->toArray());
        return new UpdateOTelEnrichmentResponse($result->toArray());
    }
}
