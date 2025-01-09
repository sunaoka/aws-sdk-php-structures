<?php

namespace Sunaoka\Aws\Structures\Chime\ListRoomMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $RoomId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListRoomMembershipsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     RoomId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
