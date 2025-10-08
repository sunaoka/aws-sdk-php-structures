<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property string $sessionId
 * @property string $actorId
 * @property bool|null $includePayloads
 * @property Shapes\FilterInput|null $filter
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListEventsRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     sessionId: string,
     *     actorId: string,
     *     includePayloads?: bool|null,
     *     filter?: Shapes\FilterInput|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
