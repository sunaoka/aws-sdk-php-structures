<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\SetIdentityPoolRoles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property array<string, string> $Roles
 * @property array<string, Shapes\RoleMapping> $RoleMappings
 */
class SetIdentityPoolRolesRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     Roles: array<string, string>,
     *     RoleMappings?: array<string, Shapes\RoleMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
