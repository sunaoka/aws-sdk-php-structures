<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateRoomMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MemberId
 * @property 'Administrator'|'Member' $Role
 */
class MembershipItem extends Shape
{
    /**
     * @param array{
     *     MemberId?: string,
     *     Role?: 'Administrator'|'Member'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
