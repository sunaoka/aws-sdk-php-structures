<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StopVectorEnrichmentJob;

trait StopVectorEnrichmentJobTrait
{
    /**
     * @param StopVectorEnrichmentJobRequest $args
     * @return StopVectorEnrichmentJobResponse
     */
    public function stopVectorEnrichmentJob(StopVectorEnrichmentJobRequest $args)
    {
        $result = parent::stopVectorEnrichmentJob($args->toArray());
        return new StopVectorEnrichmentJobResponse($result->toArray());
    }
}
