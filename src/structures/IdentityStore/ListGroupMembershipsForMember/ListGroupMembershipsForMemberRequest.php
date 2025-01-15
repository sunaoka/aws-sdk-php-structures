<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroupMembershipsForMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property Shapes\MemberId $MemberId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListGroupMembershipsForMemberRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     MemberId: Shapes\MemberId,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
