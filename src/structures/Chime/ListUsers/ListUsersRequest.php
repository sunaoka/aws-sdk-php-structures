<?php

namespace Sunaoka\Aws\Structures\Chime\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $UserEmail
 * @property 'PrivateUser'|'SharedDevice' $UserType
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     UserEmail?: string,
     *     UserType?: 'PrivateUser'|'SharedDevice',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
