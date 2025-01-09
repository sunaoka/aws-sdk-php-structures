<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListEventTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListEventTypesFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListEventTypesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ListEventTypesFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
