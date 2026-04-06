<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupingStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Group
 * @property int<1, 50>|null $MaxResults
 * @property list<Shapes\ListGroupingStatusesFilter>|null $Filters
 * @property string|null $NextToken
 */
class ListGroupingStatusesRequest extends Request
{
    /**
     * @param array{
     *     Group: string,
     *     MaxResults?: int<1, 50>|null,
     *     Filters?: list<Shapes\ListGroupingStatusesFilter>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
