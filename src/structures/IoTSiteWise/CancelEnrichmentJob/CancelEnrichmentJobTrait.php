<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CancelEnrichmentJob;

trait CancelEnrichmentJobTrait
{
    /**
     * @param CancelEnrichmentJobRequest $args
     * @return CancelEnrichmentJobResponse
     */
    public function cancelEnrichmentJob(CancelEnrichmentJobRequest $args)
    {
        $result = parent::cancelEnrichmentJob($args->toArray());
        return new CancelEnrichmentJobResponse($result->toArray());
    }
}
