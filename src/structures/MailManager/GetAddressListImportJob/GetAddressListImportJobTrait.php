<?php

namespace Sunaoka\Aws\Structures\MailManager\GetAddressListImportJob;

trait GetAddressListImportJobTrait
{
    /**
     * @param GetAddressListImportJobRequest $args
     * @return GetAddressListImportJobResponse
     */
    public function getAddressListImportJob(GetAddressListImportJobRequest $args)
    {
        $result = parent::getAddressListImportJob($args->toArray());
        return new GetAddressListImportJobResponse($result->toArray());
    }
}
