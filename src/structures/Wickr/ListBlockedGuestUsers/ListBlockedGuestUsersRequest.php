<?php

namespace Sunaoka\Aws\Structures\Wickr\ListBlockedGuestUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property int|null $maxResults
 * @property 'ASC'|'DESC'|null $sortDirection
 * @property string|null $sortFields
 * @property string|null $username
 * @property string|null $admin
 * @property string|null $nextToken
 */
class ListBlockedGuestUsersRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     maxResults?: int|null,
     *     sortDirection?: 'ASC'|'DESC'|null,
     *     sortFields?: string|null,
     *     username?: string|null,
     *     admin?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
