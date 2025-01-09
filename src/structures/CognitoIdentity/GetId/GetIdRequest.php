<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $IdentityPoolId
 * @property array<string, string> $Logins
 */
class GetIdRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string,
     *     IdentityPoolId: string,
     *     Logins?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
