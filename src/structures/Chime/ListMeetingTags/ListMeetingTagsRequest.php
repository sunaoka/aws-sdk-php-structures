<?php

namespace Sunaoka\Aws\Structures\Chime\ListMeetingTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 */
class ListMeetingTagsRequest extends Request
{
    /**
     * @param array{MeetingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
