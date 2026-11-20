<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunityBulkJobs;

trait ListOpportunityBulkJobsTrait
{
    /**
     * @param ListOpportunityBulkJobsRequest $args
     * @return ListOpportunityBulkJobsResponse
     */
    public function listOpportunityBulkJobs(ListOpportunityBulkJobsRequest $args)
    {
        $result = parent::listOpportunityBulkJobs($args->toArray());
        return new ListOpportunityBulkJobsResponse($result->toArray());
    }
}
