<?php

namespace Sunaoka\Aws\Structures\Chime\UntagMeeting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property list<string> $TagKeys
 */
class UntagMeetingRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
