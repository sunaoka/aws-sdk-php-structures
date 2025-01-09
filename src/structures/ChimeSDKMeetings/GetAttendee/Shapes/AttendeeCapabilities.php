<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\GetAttendee\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SendReceive'|'Send'|'Receive'|'None' $Audio
 * @property 'SendReceive'|'Send'|'Receive'|'None' $Video
 * @property 'SendReceive'|'Send'|'Receive'|'None' $Content
 */
class AttendeeCapabilities extends Shape
{
    /**
     * @param array{
     *     Audio: 'SendReceive'|'Send'|'Receive'|'None',
     *     Video: 'SendReceive'|'Send'|'Receive'|'None',
     *     Content: 'SendReceive'|'Send'|'Receive'|'None'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
