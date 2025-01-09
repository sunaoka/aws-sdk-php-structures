<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListKxUsersRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
