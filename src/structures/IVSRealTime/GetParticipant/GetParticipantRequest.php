<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetParticipant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property string $sessionId
 * @property string $participantId
 */
class GetParticipantRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     sessionId: string,
     *     participantId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
