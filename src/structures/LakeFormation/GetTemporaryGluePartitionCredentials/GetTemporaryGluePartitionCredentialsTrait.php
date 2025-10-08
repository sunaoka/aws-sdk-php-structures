<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGluePartitionCredentials;

trait GetTemporaryGluePartitionCredentialsTrait
{
    /**
     * @param GetTemporaryGluePartitionCredentialsRequest $args
     * @return GetTemporaryGluePartitionCredentialsResponse
     */
    public function getTemporaryGluePartitionCredentials(GetTemporaryGluePartitionCredentialsRequest $args)
    {
        $result = parent::getTemporaryGluePartitionCredentials($args->toArray());
        return new GetTemporaryGluePartitionCredentialsResponse($result->toArray());
    }
}
