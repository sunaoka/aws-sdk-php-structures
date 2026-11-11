<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryGlueFunctionCredentials;

trait GetTemporaryGlueFunctionCredentialsTrait
{
    /**
     * @param GetTemporaryGlueFunctionCredentialsRequest $args
     * @return GetTemporaryGlueFunctionCredentialsResponse
     */
    public function getTemporaryGlueFunctionCredentials(GetTemporaryGlueFunctionCredentialsRequest $args)
    {
        $result = parent::getTemporaryGlueFunctionCredentials($args->toArray());
        return new GetTemporaryGlueFunctionCredentialsResponse($result->toArray());
    }
}
