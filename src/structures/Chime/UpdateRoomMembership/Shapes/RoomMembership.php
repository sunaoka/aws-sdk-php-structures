<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateRoomMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoomId
 * @property Member|null $Member
 * @property 'Administrator'|'Member'|null $Role
 * @property string|null $InvitedBy
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class RoomMembership extends Shape
{
    /**
     * @param array{
     *     RoomId?: string|null,
     *     Member?: Member|null,
     *     Role?: 'Administrator'|'Member'|null,
     *     InvitedBy?: string|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
