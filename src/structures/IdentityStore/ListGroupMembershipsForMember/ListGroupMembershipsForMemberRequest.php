<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroupMembershipsForMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property Shapes\MemberId $MemberId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListGroupMembershipsForMemberRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     MemberId: Shapes\MemberId,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
