<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetCredentialsForIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityId
 * @property array<string, string> $Logins
 * @property string $CustomRoleArn
 */
class GetCredentialsForIdentityRequest extends Request
{
    /**
     * @param array{
     *     IdentityId: string,
     *     Logins?: array<string, string>,
     *     CustomRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
