<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateRoomMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MemberId
 * @property 'Administrator'|'Member'|null $Role
 */
class MembershipItem extends Shape
{
    /**
     * @param array{
     *     MemberId?: string|null,
     *     Role?: 'Administrator'|'Member'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
