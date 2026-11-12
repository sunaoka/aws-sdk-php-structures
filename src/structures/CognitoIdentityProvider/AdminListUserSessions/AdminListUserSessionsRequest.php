<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property string|null $NextToken
 */
class AdminListUserSessionsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
