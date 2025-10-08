<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartVectorEnrichmentJob;

trait StartVectorEnrichmentJobTrait
{
    /**
     * @param StartVectorEnrichmentJobRequest $args
     * @return StartVectorEnrichmentJobResponse
     */
    public function startVectorEnrichmentJob(StartVectorEnrichmentJobRequest $args)
    {
        $result = parent::startVectorEnrichmentJob($args->toArray());
        return new StartVectorEnrichmentJobResponse($result->toArray());
    }
}
