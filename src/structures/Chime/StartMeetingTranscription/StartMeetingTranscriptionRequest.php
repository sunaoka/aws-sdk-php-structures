<?php

namespace Sunaoka\Aws\Structures\Chime\StartMeetingTranscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property Shapes\TranscriptionConfiguration $TranscriptionConfiguration
 */
class StartMeetingTranscriptionRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     TranscriptionConfiguration: Shapes\TranscriptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
