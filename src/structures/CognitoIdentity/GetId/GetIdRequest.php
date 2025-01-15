<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AccountId
 * @property string $IdentityPoolId
 * @property array<string, string>|null $Logins
 */
class GetIdRequest extends Request
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     IdentityPoolId: string,
     *     Logins?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
