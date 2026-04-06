<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipantReplicas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceStageArn
 * @property string $participantId
 * @property string $sourceSessionId
 * @property string $destinationStageArn
 * @property string $destinationSessionId
 * @property 'ACTIVE'|'STOPPED' $replicationState
 */
class ParticipantReplica extends Shape
{
    /**
     * @param array{
     *     sourceStageArn: string,
     *     participantId: string,
     *     sourceSessionId: string,
     *     destinationStageArn: string,
     *     destinationSessionId: string,
     *     replicationState: 'ACTIVE'|'STOPPED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
