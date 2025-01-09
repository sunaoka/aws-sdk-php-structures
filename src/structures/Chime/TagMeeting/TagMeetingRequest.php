<?php

namespace Sunaoka\Aws\Structures\Chime\TagMeeting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property list<Shapes\Tag> $Tags
 */
class TagMeetingRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
