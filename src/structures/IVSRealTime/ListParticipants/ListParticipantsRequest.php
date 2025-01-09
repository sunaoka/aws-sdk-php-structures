<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property string $sessionId
 * @property string $filterByUserId
 * @property bool $filterByPublished
 * @property 'CONNECTED'|'DISCONNECTED' $filterByState
 * @property string $nextToken
 * @property int $maxResults
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED' $filterByRecordingState
 */
class ListParticipantsRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     sessionId: string,
     *     filterByUserId?: string,
     *     filterByPublished?: bool,
     *     filterByState?: 'CONNECTED'|'DISCONNECTED',
     *     nextToken?: string,
     *     maxResults?: int,
     *     filterByRecordingState?: 'STARTING'|'ACTIVE'|'STOPPING'|'STOPPED'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
