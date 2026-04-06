<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteMeeting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 */
class DeleteMeetingRequest extends Request
{
    /**
     * @param array{MeetingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
