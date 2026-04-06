<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddressListImportJob;

trait CreateAddressListImportJobTrait
{
    /**
     * @param CreateAddressListImportJobRequest $args
     * @return CreateAddressListImportJobResponse
     */
    public function createAddressListImportJob(CreateAddressListImportJobRequest $args)
    {
        $result = parent::createAddressListImportJob($args->toArray());
        return new CreateAddressListImportJobResponse($result->toArray());
    }
}
