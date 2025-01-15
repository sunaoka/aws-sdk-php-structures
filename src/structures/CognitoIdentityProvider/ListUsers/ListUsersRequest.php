<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property list<string>|null $AttributesToGet
 * @property int<0, 60>|null $Limit
 * @property string|null $PaginationToken
 * @property string|null $Filter
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     AttributesToGet?: list<string>|null,
     *     Limit?: int<0, 60>|null,
     *     PaginationToken?: string|null,
     *     Filter?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
