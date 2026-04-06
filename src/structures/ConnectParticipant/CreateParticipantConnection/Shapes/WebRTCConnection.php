<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CreateParticipantConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attendee|null $Attendee
 * @property WebRTCMeeting|null $Meeting
 */
class WebRTCConnection extends Shape
{
    /**
     * @param array{
     *     Attendee?: Attendee|null,
     *     Meeting?: WebRTCMeeting|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
