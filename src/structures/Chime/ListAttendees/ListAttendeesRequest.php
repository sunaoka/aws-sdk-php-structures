<?php

namespace Sunaoka\Aws\Structures\Chime\ListAttendees;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property string $NextToken
 * @property int<1, 99> $MaxResults
 */
class ListAttendeesRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 99>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
