<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\GroupFilter> $Filters
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\GroupFilter>,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
