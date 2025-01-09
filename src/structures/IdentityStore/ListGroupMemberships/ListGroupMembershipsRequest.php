<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroupMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $GroupId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListGroupMembershipsRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     GroupId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
