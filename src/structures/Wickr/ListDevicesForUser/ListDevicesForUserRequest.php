<?php

namespace Sunaoka\Aws\Structures\Wickr\ListDevicesForUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $userId
 * @property string|null $nextToken
 * @property int|null $maxResults
 * @property string|null $sortFields
 * @property 'ASC'|'DESC'|null $sortDirection
 */
class ListDevicesForUserRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     userId: string,
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
