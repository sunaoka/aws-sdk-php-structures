<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateRoomMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MemberId
 * @property 'User'|'Bot'|'Webhook' $MemberType
 * @property string $Email
 * @property string $FullName
 * @property string $AccountId
 */
class Member extends Shape
{
    /**
     * @param array{
     *     MemberId?: string,
     *     MemberType?: 'User'|'Bot'|'Webhook',
     *     Email?: string,
     *     FullName?: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
