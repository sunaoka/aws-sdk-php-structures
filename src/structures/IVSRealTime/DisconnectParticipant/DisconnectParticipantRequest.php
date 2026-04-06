<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\DisconnectParticipant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $participantId
 * @property string|null $reason
 * @property string $stageArn
 */
class DisconnectParticipantRequest extends Request
{
    /**
     * @param array{
     *     participantId: string,
     *     reason?: string|null,
     *     stageArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
