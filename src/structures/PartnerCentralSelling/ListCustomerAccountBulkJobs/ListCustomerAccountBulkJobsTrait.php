<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListCustomerAccountBulkJobs;

trait ListCustomerAccountBulkJobsTrait
{
    /**
     * @param ListCustomerAccountBulkJobsRequest $args
     * @return ListCustomerAccountBulkJobsResponse
     */
    public function listCustomerAccountBulkJobs(ListCustomerAccountBulkJobsRequest $args)
    {
        $result = parent::listCustomerAccountBulkJobs($args->toArray());
        return new ListCustomerAccountBulkJobsResponse($result->toArray());
    }
}
