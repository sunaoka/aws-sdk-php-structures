<?php

namespace Sunaoka\Aws\Structures\Sts\GetScopedCredentials;

trait GetScopedCredentialsTrait
{
    /**
     * @param GetScopedCredentialsRequest $args
     * @return GetScopedCredentialsResponse
     */
    public function getScopedCredentials(GetScopedCredentialsRequest $args)
    {
        $result = parent::getScopedCredentials($args->toArray());
        return new GetScopedCredentialsResponse($result->toArray());
    }
}
