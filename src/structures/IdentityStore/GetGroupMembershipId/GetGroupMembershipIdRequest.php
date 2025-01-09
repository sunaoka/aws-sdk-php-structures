<?php

namespace Sunaoka\Aws\Structures\IdentityStore\GetGroupMembershipId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $GroupId
 * @property Shapes\MemberId $MemberId
 */
class GetGroupMembershipIdRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     GroupId: string,
     *     MemberId: Shapes\MemberId
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
