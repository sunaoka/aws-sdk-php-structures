<?php

namespace Sunaoka\Aws\Structures\Chime\ListAttendees;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListAttendeesRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
