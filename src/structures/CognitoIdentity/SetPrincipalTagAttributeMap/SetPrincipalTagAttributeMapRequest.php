<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\SetPrincipalTagAttributeMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityProviderName
 * @property bool $UseDefaults
 * @property array<string, string> $PrincipalTags
 */
class SetPrincipalTagAttributeMapRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityProviderName: string,
     *     UseDefaults?: bool,
     *     PrincipalTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
