<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentCredentials;

trait GetEnvironmentCredentialsTrait
{
    /**
     * @param GetEnvironmentCredentialsRequest $args
     * @return GetEnvironmentCredentialsResponse
     */
    public function getEnvironmentCredentials(GetEnvironmentCredentialsRequest $args)
    {
        $result = parent::getEnvironmentCredentials($args->toArray());
        return new GetEnvironmentCredentialsResponse($result->toArray());
    }
}
