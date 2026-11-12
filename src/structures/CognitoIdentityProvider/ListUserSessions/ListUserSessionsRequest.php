<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property string|null $NextToken
 */
class ListUserSessionsRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
