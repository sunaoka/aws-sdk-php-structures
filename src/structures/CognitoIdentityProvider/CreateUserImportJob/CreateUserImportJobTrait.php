<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserImportJob;

trait CreateUserImportJobTrait
{
    /**
     * @param CreateUserImportJobRequest $args
     * @return CreateUserImportJobResponse
     */
    public function createUserImportJob(CreateUserImportJobRequest $args)
    {
        $result = parent::createUserImportJob($args->toArray());
        return new CreateUserImportJobResponse($result->toArray());
    }
}
