<?php

namespace Sunaoka\Aws\Structures\Wickr\ListSecurityGroupUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $groupId
 * @property string|null $nextToken
 * @property int|null $maxResults
 * @property string|null $sortFields
 * @property 'ASC'|'DESC'|null $sortDirection
 */
class ListSecurityGroupUsersRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     groupId: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null,
     *     sortFields?: string|null,
     *     sortDirection?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
