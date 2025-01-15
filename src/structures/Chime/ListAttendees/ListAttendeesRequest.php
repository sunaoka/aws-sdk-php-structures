<?php

namespace Sunaoka\Aws\Structures\Chime\ListAttendees;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property string|null $NextToken
 * @property int<1, 99>|null $MaxResults
 */
class ListAttendeesRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 99>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
