<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetParticipant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $participantId
 * @property string $sessionId
 * @property string $stageArn
 */
class GetParticipantRequest extends Request
{
    /**
     * @param array{
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
