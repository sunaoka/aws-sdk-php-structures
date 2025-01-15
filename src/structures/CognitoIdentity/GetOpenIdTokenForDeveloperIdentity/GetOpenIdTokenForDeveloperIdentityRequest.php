<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetOpenIdTokenForDeveloperIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string|null $IdentityId
 * @property array<string, string> $Logins
 * @property array<string, string>|null $PrincipalTags
 * @property int<1, 86400>|null $TokenDuration
 */
class GetOpenIdTokenForDeveloperIdentityRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityId?: string|null,
     *     Logins: array<string, string>,
     *     PrincipalTags?: array<string, string>|null,
     *     TokenDuration?: int<1, 86400>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
