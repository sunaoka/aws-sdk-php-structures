<?php

namespace Sunaoka\Aws\Structures\SSO\GetRoleCredentials;

trait GetRoleCredentialsTrait
{
    /**
     * @param GetRoleCredentialsRequest $args
     * @return GetRoleCredentialsResponse
     */
    public function getRoleCredentials(GetRoleCredentialsRequest $args)
    {
        $result = parent::getRoleCredentials($args->toArray());
        return new GetRoleCredentialsResponse($result->toArray());
    }
}
