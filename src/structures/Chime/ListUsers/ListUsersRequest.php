<?php

namespace Sunaoka\Aws\Structures\Chime\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $UserEmail
 * @property 'PrivateUser'|'SharedDevice'|null $UserType
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     UserEmail?: string|null,
     *     UserType?: 'PrivateUser'|'SharedDevice'|null,
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
