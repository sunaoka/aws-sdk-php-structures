<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
