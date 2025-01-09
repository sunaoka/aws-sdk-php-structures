<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $Email
 * @property string $MasterId
 * @property string $AdministratorId
 * @property string $MemberStatus
 * @property \Aws\Api\DateTimeResult $InvitedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class Member extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     Email?: string,
     *     MasterId?: string,
     *     AdministratorId?: string,
     *     MemberStatus?: string,
     *     InvitedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
