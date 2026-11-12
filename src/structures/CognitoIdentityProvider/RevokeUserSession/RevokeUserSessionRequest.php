<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\RevokeUserSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string $SessionId
 * @property 'NONE'|'LINKED'|null $RevokeAssociatedSessions
 */
class RevokeUserSessionRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     SessionId: string,
     *     RevokeAssociatedSessions?: 'NONE'|'LINKED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
