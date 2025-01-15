<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100> $maxResults
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
