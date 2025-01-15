<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetMasterAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $InvitationId
 * @property \Aws\Api\DateTimeResult|null $InvitedAt
 * @property string|null $MemberStatus
 */
class Invitation extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     InvitationId?: string|null,
     *     InvitedAt?: \Aws\Api\DateTimeResult|null,
     *     MemberStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
