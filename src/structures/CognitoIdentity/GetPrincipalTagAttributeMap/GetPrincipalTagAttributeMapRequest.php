<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetPrincipalTagAttributeMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityProviderName
 */
class GetPrincipalTagAttributeMapRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityProviderName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
