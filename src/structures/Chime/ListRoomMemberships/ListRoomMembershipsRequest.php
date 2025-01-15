<?php

namespace Sunaoka\Aws\Structures\Chime\ListRoomMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $RoomId
 * @property int<1, 99>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRoomMembershipsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     RoomId: string,
     *     MaxResults?: int<1, 99>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
