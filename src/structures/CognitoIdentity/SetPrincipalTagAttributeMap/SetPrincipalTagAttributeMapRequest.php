<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\SetPrincipalTagAttributeMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityProviderName
 * @property bool|null $UseDefaults
 * @property array<string, string>|null $PrincipalTags
 */
class SetPrincipalTagAttributeMapRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityProviderName: string,
     *     UseDefaults?: bool|null,
     *     PrincipalTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
