<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $InvitationId
 * @property \Aws\Api\DateTimeResult $InvitedAt
 * @property string $MemberStatus
 */
class Invitation extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     InvitationId?: string,
     *     InvitedAt?: \Aws\Api\DateTimeResult,
     *     MemberStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
