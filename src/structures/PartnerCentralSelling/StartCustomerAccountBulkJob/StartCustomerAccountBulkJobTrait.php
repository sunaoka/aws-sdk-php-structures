<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartCustomerAccountBulkJob;

trait StartCustomerAccountBulkJobTrait
{
    /**
     * @param StartCustomerAccountBulkJobRequest $args
     * @return StartCustomerAccountBulkJobResponse
     */
    public function startCustomerAccountBulkJob(StartCustomerAccountBulkJobRequest $args)
    {
        $result = parent::startCustomerAccountBulkJob($args->toArray());
        return new StartCustomerAccountBulkJobResponse($result->toArray());
    }
}
