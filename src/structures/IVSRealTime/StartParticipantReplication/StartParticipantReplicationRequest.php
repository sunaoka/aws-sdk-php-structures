<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartParticipantReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceStageArn
 * @property string $destinationStageArn
 * @property string $participantId
 * @property int<0, 60>|null $reconnectWindowSeconds
 * @property array<string, string>|null $attributes
 */
class StartParticipantReplicationRequest extends Request
{
    /**
     * @param array{
     *     sourceStageArn: string,
     *     destinationStageArn: string,
     *     participantId: string,
     *     reconnectWindowSeconds?: int<0, 60>|null,
     *     attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
