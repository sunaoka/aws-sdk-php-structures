<?php

namespace Sunaoka\Aws\Structures\MailManager\StopAddressListImportJob;

trait StopAddressListImportJobTrait
{
    /**
     * @param StopAddressListImportJobRequest $args
     * @return StopAddressListImportJobResponse
     */
    public function stopAddressListImportJob(StopAddressListImportJobRequest $args)
    {
        $result = parent::stopAddressListImportJob($args->toArray());
        return new StopAddressListImportJobResponse($result->toArray());
    }
}
