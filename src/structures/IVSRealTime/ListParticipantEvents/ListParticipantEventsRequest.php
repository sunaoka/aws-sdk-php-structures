<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipantEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property string $sessionId
 * @property string $participantId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListParticipantEventsRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     sessionId: string,
     *     participantId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
