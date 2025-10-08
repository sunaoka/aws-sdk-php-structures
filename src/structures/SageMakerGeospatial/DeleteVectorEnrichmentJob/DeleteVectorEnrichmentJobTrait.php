<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\DeleteVectorEnrichmentJob;

trait DeleteVectorEnrichmentJobTrait
{
    /**
     * @param DeleteVectorEnrichmentJobRequest $args
     * @return DeleteVectorEnrichmentJobResponse
     */
    public function deleteVectorEnrichmentJob(DeleteVectorEnrichmentJobRequest $args)
    {
        $result = parent::deleteVectorEnrichmentJob($args->toArray());
        return new DeleteVectorEnrichmentJobResponse($result->toArray());
    }
}
