<?php

namespace Sunaoka\Aws\Structures\Chime\StopMeetingTranscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 */
class StopMeetingTranscriptionRequest extends Request
{
    /**
     * @param array{MeetingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
