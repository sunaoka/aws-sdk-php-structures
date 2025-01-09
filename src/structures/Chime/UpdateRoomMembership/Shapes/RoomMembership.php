<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateRoomMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoomId
 * @property Member $Member
 * @property 'Administrator'|'Member' $Role
 * @property string $InvitedBy
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class RoomMembership extends Shape
{
    /**
     * @param array{
     *     RoomId?: string,
     *     Member?: Member,
     *     Role?: 'Administrator'|'Member',
     *     InvitedBy?: string,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
