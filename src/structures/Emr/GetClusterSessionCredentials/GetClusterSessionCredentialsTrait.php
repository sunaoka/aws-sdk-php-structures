<?php

namespace Sunaoka\Aws\Structures\Emr\GetClusterSessionCredentials;

trait GetClusterSessionCredentialsTrait
{
    /**
     * @param GetClusterSessionCredentialsRequest $args
     * @return GetClusterSessionCredentialsResponse
     */
    public function getClusterSessionCredentials(GetClusterSessionCredentialsRequest $args)
    {
        $result = parent::getClusterSessionCredentials($args->toArray());
        return new GetClusterSessionCredentialsResponse($result->toArray());
    }
}
