<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\StartUserImportJob;

trait StartUserImportJobTrait
{
    /**
     * @param StartUserImportJobRequest $args
     * @return StartUserImportJobResponse
     */
    public function startUserImportJob(StartUserImportJobRequest $args)
    {
        $result = parent::startUserImportJob($args->toArray());
        return new StartUserImportJobResponse($result->toArray());
    }
}
