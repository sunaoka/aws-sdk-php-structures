<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateRoomMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MemberId
 * @property 'User'|'Bot'|'Webhook'|null $MemberType
 * @property string|null $Email
 * @property string|null $FullName
 * @property string|null $AccountId
 */
class Member extends Shape
{
    /**
     * @param array{
     *     MemberId?: string|null,
     *     MemberType?: 'User'|'Bot'|'Webhook'|null,
     *     Email?: string|null,
     *     FullName?: string|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
