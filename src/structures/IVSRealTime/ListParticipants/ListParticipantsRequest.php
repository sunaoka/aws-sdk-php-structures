<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property string $sessionId
 * @property string|null $filterByUserId
 * @property bool|null $filterByPublished
 * @property 'CONNECTED'|'DISCONNECTED'|null $filterByState
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'|null $filterByRecordingState
 */
class ListParticipantsRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     sessionId: string,
     *     filterByUserId?: string|null,
     *     filterByPublished?: bool|null,
     *     filterByState?: 'CONNECTED'|'DISCONNECTED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     filterByRecordingState?: 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
