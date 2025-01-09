<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateRoomMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $RoomId
 * @property string $MemberId
 * @property 'Administrator'|'Member' $Role
 */
class UpdateRoomMembershipRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     RoomId: string,
     *     MemberId: string,
     *     Role?: 'Administrator'|'Member'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
