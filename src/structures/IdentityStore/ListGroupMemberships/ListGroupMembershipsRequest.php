<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroupMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property string $GroupId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListGroupMembershipsRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     GroupId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
