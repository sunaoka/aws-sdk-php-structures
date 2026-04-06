<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroupMembershipsForMember\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityStoreId
 * @property string|null $MembershipId
 * @property string|null $GroupId
 * @property MemberId|null $MemberId
 */
class GroupMembership extends Shape
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     MembershipId?: string|null,
     *     GroupId?: string|null,
     *     MemberId?: MemberId|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
