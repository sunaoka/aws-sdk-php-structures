<?php

namespace Sunaoka\Aws\Structures\EMRContainers\GetManagedEndpointSessionCredentials;

trait GetManagedEndpointSessionCredentialsTrait
{
    /**
     * @param GetManagedEndpointSessionCredentialsRequest $args
     * @return GetManagedEndpointSessionCredentialsResponse
     */
    public function getManagedEndpointSessionCredentials(GetManagedEndpointSessionCredentialsRequest $args)
    {
        $result = parent::getManagedEndpointSessionCredentials($args->toArray());
        return new GetManagedEndpointSessionCredentialsResponse($result->toArray());
    }
}
