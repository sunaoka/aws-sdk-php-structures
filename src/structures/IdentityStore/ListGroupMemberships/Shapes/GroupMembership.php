<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroupMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityStoreId
 * @property string $MembershipId
 * @property string $GroupId
 * @property MemberId $MemberId
 */
class GroupMembership extends Shape
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     MembershipId?: string,
     *     GroupId?: string,
     *     MemberId?: MemberId
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
