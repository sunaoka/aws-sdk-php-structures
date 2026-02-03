<?php

namespace Sunaoka\Aws\Structures\MPA\GetApprovalTeam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApproverId
 * @property \Aws\Api\DateTimeResult|null $ResponseTime
 * @property string|null $PrimaryIdentityId
 * @property string|null $PrimaryIdentitySourceArn
 * @property 'PENDING'|'ACCEPTED'|'REJECTED'|'INVALID'|null $PrimaryIdentityStatus
 * @property list<MfaMethod>|null $MfaMethods
 */
class GetApprovalTeamResponseApprover extends Shape
{
    /**
     * @param array{
     *     ApproverId?: string|null,
     *     ResponseTime?: \Aws\Api\DateTimeResult|null,
     *     PrimaryIdentityId?: string|null,
     *     PrimaryIdentitySourceArn?: string|null,
     *     PrimaryIdentityStatus?: 'PENDING'|'ACCEPTED'|'REJECTED'|'INVALID'|null,
     *     MfaMethods?: list<MfaMethod>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
