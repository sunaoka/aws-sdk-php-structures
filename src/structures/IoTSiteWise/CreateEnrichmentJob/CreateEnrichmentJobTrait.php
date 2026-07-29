<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateEnrichmentJob;

trait CreateEnrichmentJobTrait
{
    /**
     * @param CreateEnrichmentJobRequest $args
     * @return CreateEnrichmentJobResponse
     */
    public function createEnrichmentJob(CreateEnrichmentJobRequest $args)
    {
        $result = parent::createEnrichmentJob($args->toArray());
        return new CreateEnrichmentJobResponse($result->toArray());
    }
}
