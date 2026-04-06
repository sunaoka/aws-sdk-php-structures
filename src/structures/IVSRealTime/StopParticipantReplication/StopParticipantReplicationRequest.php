<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StopParticipantReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceStageArn
 * @property string $destinationStageArn
 * @property string $participantId
 */
class StopParticipantReplicationRequest extends Request
{
    /**
     * @param array{
     *     sourceStageArn: string,
     *     destinationStageArn: string,
     *     participantId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
