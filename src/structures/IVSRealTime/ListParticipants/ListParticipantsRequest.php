<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $filterByPublished
 * @property 'CONNECTED'|'DISCONNECTED'|null $filterByState
 * @property string|null $filterByUserId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $sessionId
 * @property string $stageArn
 */
class ListParticipantsRequest extends Request
{
    /**
     * @param array{
     *     filterByPublished?: bool|null,
     *     filterByState?: 'CONNECTED'|'DISCONNECTED'|null,
     *     filterByUserId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     sessionId: string,
     *     stageArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
