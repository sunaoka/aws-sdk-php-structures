<?php

namespace Sunaoka\Aws\Structures\Chime\GetMeeting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 */
class GetMeetingRequest extends Request
{
    /**
     * @param array{MeetingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
