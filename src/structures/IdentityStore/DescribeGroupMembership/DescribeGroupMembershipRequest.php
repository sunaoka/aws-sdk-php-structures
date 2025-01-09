<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeGroupMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $MembershipId
 */
class DescribeGroupMembershipRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     MembershipId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
