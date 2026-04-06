<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryDataLocationCredentials;

trait GetTemporaryDataLocationCredentialsTrait
{
    /**
     * @param GetTemporaryDataLocationCredentialsRequest $args
     * @return GetTemporaryDataLocationCredentialsResponse
     */
    public function getTemporaryDataLocationCredentials(GetTemporaryDataLocationCredentialsRequest $args)
    {
        $result = parent::getTemporaryDataLocationCredentials($args->toArray());
        return new GetTemporaryDataLocationCredentialsResponse($result->toArray());
    }
}
