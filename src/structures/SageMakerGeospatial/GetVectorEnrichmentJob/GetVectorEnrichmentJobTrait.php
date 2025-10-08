<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetVectorEnrichmentJob;

trait GetVectorEnrichmentJobTrait
{
    /**
     * @param GetVectorEnrichmentJobRequest $args
     * @return GetVectorEnrichmentJobResponse
     */
    public function getVectorEnrichmentJob(GetVectorEnrichmentJobRequest $args)
    {
        $result = parent::getVectorEnrichmentJob($args->toArray());
        return new GetVectorEnrichmentJobResponse($result->toArray());
    }
}
