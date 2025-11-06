<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroupMembershipsForMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityStoreId
 * @property string|null $MembershipId
 * @property string|null $GroupId
 * @property MemberId|null $MemberId
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $CreatedBy
 * @property string|null $UpdatedBy
 */
class GroupMembership extends Shape
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     MembershipId?: string|null,
     *     GroupId?: string|null,
     *     MemberId?: MemberId|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     UpdatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
