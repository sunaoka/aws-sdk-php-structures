<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\StopUserImportJob;

trait StopUserImportJobTrait
{
    /**
     * @param StopUserImportJobRequest $args
     * @return StopUserImportJobResponse
     */
    public function stopUserImportJob(StopUserImportJobRequest $args)
    {
        $result = parent::stopUserImportJob($args->toArray());
        return new StopUserImportJobResponse($result->toArray());
    }
}
