<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipantEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $participantId
 * @property string $sessionId
 * @property string $stageArn
 */
class ListParticipantEventsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     participantId: string,
     *     sessionId: string,
     *     stageArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
