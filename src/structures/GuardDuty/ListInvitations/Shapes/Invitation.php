<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $InvitationId
 * @property string $RelationshipStatus
 * @property string $InvitedAt
 */
class Invitation extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     InvitationId?: string,
     *     RelationshipStatus?: string,
     *     InvitedAt?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
