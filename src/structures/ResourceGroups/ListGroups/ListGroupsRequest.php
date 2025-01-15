<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\GroupFilter>|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\GroupFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
