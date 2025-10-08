<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\SetIdentityPoolRoles;

trait SetIdentityPoolRolesTrait
{
    /**
     * @param SetIdentityPoolRolesRequest $args
     * @return void
     */
    public function setIdentityPoolRoles(SetIdentityPoolRolesRequest $args)
    {
        parent::setIdentityPoolRoles($args->toArray());
    }
}
