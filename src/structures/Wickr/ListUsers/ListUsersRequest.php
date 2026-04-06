<?php

namespace Sunaoka\Aws\Structures\Wickr\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string|null $nextToken
 * @property int|null $maxResults
 * @property string|null $sortFields
 * @property 'ASC'|'DESC'|null $sortDirection
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $username
 * @property int|null $status
 * @property string|null $groupId
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null,
     *     sortFields?: string|null,
     *     sortDirection?: 'ASC'|'DESC'|null,
     *     firstName?: string|null,
     *     lastName?: string|null,
     *     username?: string|null,
     *     status?: int|null,
     *     groupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
