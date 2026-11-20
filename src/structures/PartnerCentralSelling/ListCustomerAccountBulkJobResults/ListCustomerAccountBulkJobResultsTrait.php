<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListCustomerAccountBulkJobResults;

trait ListCustomerAccountBulkJobResultsTrait
{
    /**
     * @param ListCustomerAccountBulkJobResultsRequest $args
     * @return ListCustomerAccountBulkJobResultsResponse
     */
    public function listCustomerAccountBulkJobResults(ListCustomerAccountBulkJobResultsRequest $args)
    {
        $result = parent::listCustomerAccountBulkJobResults($args->toArray());
        return new ListCustomerAccountBulkJobResultsResponse($result->toArray());
    }
}
