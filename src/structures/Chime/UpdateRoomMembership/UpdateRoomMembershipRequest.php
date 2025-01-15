<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateRoomMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $RoomId
 * @property string $MemberId
 * @property 'Administrator'|'Member'|null $Role
 */
class UpdateRoomMembershipRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     RoomId: string,
     *     MemberId: string,
     *     Role?: 'Administrator'|'Member'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
