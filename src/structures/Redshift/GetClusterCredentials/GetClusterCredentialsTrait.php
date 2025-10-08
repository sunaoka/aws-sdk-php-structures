<?php

namespace Sunaoka\Aws\Structures\Redshift\GetClusterCredentials;

trait GetClusterCredentialsTrait
{
    /**
     * @param GetClusterCredentialsRequest $args
     * @return GetClusterCredentialsResponse
     */
    public function getClusterCredentials(GetClusterCredentialsRequest $args)
    {
        $result = parent::getClusterCredentials($args->toArray());
        return new GetClusterCredentialsResponse($result->toArray());
    }
}
