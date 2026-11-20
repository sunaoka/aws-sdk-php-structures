<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunityBulkJobResults;

trait ListOpportunityBulkJobResultsTrait
{
    /**
     * @param ListOpportunityBulkJobResultsRequest $args
     * @return ListOpportunityBulkJobResultsResponse
     */
    public function listOpportunityBulkJobResults(ListOpportunityBulkJobResultsRequest $args)
    {
        $result = parent::listOpportunityBulkJobResults($args->toArray());
        return new ListOpportunityBulkJobResultsResponse($result->toArray());
    }
}
