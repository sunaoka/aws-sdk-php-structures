<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListPermissionGroupsByUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $userId
 * @property string|null $nextToken
 * @property int<1, 100> $maxResults
 */
class ListPermissionGroupsByUserRequest extends Request
{
    /**
     * @param array{
     *     userId: string,
     *     nextToken?: string|null,
     *     maxResults: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
