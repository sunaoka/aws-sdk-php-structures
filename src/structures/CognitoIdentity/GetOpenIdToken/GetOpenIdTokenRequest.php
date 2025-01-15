<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetOpenIdToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityId
 * @property array<string, string>|null $Logins
 */
class GetOpenIdTokenRequest extends Request
{
    /**
     * @param array{
     *     IdentityId: string,
     *     Logins?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
