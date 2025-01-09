<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property list<string> $AttributesToGet
 * @property int<0, 60> $Limit
 * @property string $PaginationToken
 * @property string $Filter
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     AttributesToGet?: list<string>,
     *     Limit?: int<0, 60>,
     *     PaginationToken?: string,
     *     Filter?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
