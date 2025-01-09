<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property list<string> $AttributesToGet
 * @property int $Limit
 * @property string $PaginationToken
 * @property string $Filter
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     AttributesToGet?: list<string>,
     *     Limit?: int,
     *     PaginationToken?: string,
     *     Filter?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
