<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetCredentialsForIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityId
 * @property array<string, string>|null $Logins
 * @property string|null $CustomRoleArn
 */
class GetCredentialsForIdentityRequest extends Request
{
    /**
     * @param array{
     *     IdentityId: string,
     *     Logins?: array<string, string>|null,
     *     CustomRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
