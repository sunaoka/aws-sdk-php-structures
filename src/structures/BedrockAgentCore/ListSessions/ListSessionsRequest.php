<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property string $actorId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     actorId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
