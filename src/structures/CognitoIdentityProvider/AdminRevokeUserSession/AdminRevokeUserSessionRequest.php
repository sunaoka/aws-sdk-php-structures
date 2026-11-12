<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminRevokeUserSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property string $SessionId
 * @property 'NONE'|'LINKED'|null $RevokeAssociatedSessions
 */
class AdminRevokeUserSessionRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     SessionId: string,
     *     RevokeAssociatedSessions?: 'NONE'|'LINKED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
