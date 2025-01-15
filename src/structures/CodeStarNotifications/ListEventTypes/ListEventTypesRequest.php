<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\ListEventTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListEventTypesFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListEventTypesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ListEventTypesFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
