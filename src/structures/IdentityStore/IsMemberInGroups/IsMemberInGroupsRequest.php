<?php

namespace Sunaoka\Aws\Structures\IdentityStore\IsMemberInGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property Shapes\MemberId $MemberId
 * @property list<string> $GroupIds
 */
class IsMemberInGroupsRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     MemberId: Shapes\MemberId,
     *     GroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
