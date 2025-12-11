<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetDbCredentials;

trait GetDbCredentialsTrait
{
    /**
     * @param GetDbCredentialsRequest $args
     * @return GetDbCredentialsResponse
     */
    public function getDbCredentials(GetDbCredentialsRequest $args)
    {
        $result = parent::getDbCredentials($args->toArray());
        return new GetDbCredentialsResponse($result->toArray());
    }
}
