<?php

namespace Sunaoka\Aws\Structures\MailManager\StartAddressListImportJob;

trait StartAddressListImportJobTrait
{
    /**
     * @param StartAddressListImportJobRequest $args
     * @return StartAddressListImportJobResponse
     */
    public function startAddressListImportJob(StartAddressListImportJobRequest $args)
    {
        $result = parent::startAddressListImportJob($args->toArray());
        return new StartAddressListImportJobResponse($result->toArray());
    }
}
