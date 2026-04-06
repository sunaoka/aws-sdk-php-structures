<?php

namespace Sunaoka\Aws\Structures\MailManager\ListAddressListImportJobs;

trait ListAddressListImportJobsTrait
{
    /**
     * @param ListAddressListImportJobsRequest $args
     * @return ListAddressListImportJobsResponse
     */
    public function listAddressListImportJobs(ListAddressListImportJobsRequest $args)
    {
        $result = parent::listAddressListImportJobs($args->toArray());
        return new ListAddressListImportJobsResponse($result->toArray());
    }
}
