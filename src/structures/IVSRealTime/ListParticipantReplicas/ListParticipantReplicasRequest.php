<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipantReplicas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceStageArn
 * @property string $participantId
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListParticipantReplicasRequest extends Request
{
    /**
     * @param array{
     *     sourceStageArn: string,
     *     participantId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
