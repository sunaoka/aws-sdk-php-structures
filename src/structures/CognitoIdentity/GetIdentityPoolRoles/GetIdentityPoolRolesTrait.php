<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetIdentityPoolRoles;

trait GetIdentityPoolRolesTrait
{
    /**
     * @param GetIdentityPoolRolesRequest $args
     * @return GetIdentityPoolRolesResponse
     */
    public function getIdentityPoolRoles(GetIdentityPoolRolesRequest $args)
    {
        $result = parent::getIdentityPoolRoles($args->toArray());
        return new GetIdentityPoolRolesResponse($result->toArray());
    }
}
