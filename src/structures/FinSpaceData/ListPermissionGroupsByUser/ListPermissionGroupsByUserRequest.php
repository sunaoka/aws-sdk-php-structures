<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListPermissionGroupsByUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListPermissionGroupsByUserRequest extends Request
{
    /**
     * @param array{
     *     userId: string,
     *     nextToken?: string,
     *     maxResults: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
