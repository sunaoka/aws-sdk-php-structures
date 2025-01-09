<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetOpenIdTokenForDeveloperIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityId
 * @property array<string, string> $Logins
 * @property array<string, string> $PrincipalTags
 * @property int $TokenDuration
 */
class GetOpenIdTokenForDeveloperIdentityRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityId?: string,
     *     Logins: array<string, string>,
     *     PrincipalTags?: array<string, string>,
     *     TokenDuration?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
