<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationMLInputChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property string $collaborationIdentifier
 */
class ListCollaborationMLInputChannelsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     collaborationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
