<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccountBulkJob;

trait GetCustomerAccountBulkJobTrait
{
    /**
     * @param GetCustomerAccountBulkJobRequest $args
     * @return GetCustomerAccountBulkJobResponse
     */
    public function getCustomerAccountBulkJob(GetCustomerAccountBulkJobRequest $args)
    {
        $result = parent::getCustomerAccountBulkJob($args->toArray());
        return new GetCustomerAccountBulkJobResponse($result->toArray());
    }
}
