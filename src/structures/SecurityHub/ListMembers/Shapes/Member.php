<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $Email
 * @property string|null $MasterId
 * @property string|null $AdministratorId
 * @property string|null $MemberStatus
 * @property \Aws\Api\DateTimeResult|null $InvitedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class Member extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Email?: string|null,
     *     MasterId?: string|null,
     *     AdministratorId?: string|null,
     *     MemberStatus?: string|null,
     *     InvitedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
