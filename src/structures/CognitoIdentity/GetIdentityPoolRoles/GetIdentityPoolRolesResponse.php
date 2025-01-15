<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetIdentityPoolRoles;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $IdentityPoolId
 * @property array<string, string>|null $Roles
 * @property array<string, Shapes\RoleMapping>|null $RoleMappings
 */
class GetIdentityPoolRolesResponse extends Response
{
}
