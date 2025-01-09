<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetIdentityPoolRoles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 */
class GetIdentityPoolRolesRequest extends Request
{
    /**
     * @param array{IdentityPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
