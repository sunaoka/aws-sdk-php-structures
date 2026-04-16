<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListChats;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $userId
 * @property int<1, 20>|null $maxResults
 * @property string|null $nextToken
 */
class ListChatsRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     userId?: string|null,
     *     maxResults?: int<1, 20>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
