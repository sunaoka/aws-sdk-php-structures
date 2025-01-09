<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupingStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Group
 * @property int<1, 50> $MaxResults
 * @property list<Shapes\ListGroupingStatusesFilter> $Filters
 * @property string $NextToken
 */
class ListGroupingStatusesRequest extends Request
{
    /**
     * @param array{
     *     Group: string,
     *     MaxResults?: int<1, 50>,
     *     Filters?: list<Shapes\ListGroupingStatusesFilter>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
