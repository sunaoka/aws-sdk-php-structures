<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListActorMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property string $agentSpaceId
 * @property string $pentestId
 * @property string $actorIdentifier
 */
class ListActorMessagesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     agentSpaceId: string,
     *     pentestId: string,
     *     actorIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
