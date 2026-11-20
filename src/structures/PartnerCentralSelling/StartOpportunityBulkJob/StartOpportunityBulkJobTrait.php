<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartOpportunityBulkJob;

trait StartOpportunityBulkJobTrait
{
    /**
     * @param StartOpportunityBulkJobRequest $args
     * @return StartOpportunityBulkJobResponse
     */
    public function startOpportunityBulkJob(StartOpportunityBulkJobRequest $args)
    {
        $result = parent::startOpportunityBulkJob($args->toArray());
        return new StartOpportunityBulkJobResponse($result->toArray());
    }
}
