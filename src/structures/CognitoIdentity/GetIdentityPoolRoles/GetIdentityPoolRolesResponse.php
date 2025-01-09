<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetIdentityPoolRoles;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $IdentityPoolId
 * @property array<string, string> $Roles
 * @property array<string, Shapes\RoleMapping> $RoleMappings
 */
class GetIdentityPoolRolesResponse extends Response
{
}
