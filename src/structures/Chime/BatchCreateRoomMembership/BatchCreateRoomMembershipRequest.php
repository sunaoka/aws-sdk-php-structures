<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateRoomMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $RoomId
 * @property list<Shapes\MembershipItem> $MembershipItemList
 */
class BatchCreateRoomMembershipRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     RoomId: string,
     *     MembershipItemList: list<Shapes\MembershipItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
