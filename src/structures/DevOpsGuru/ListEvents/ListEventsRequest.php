<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListEventsFilters $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $AccountId
 */
class ListEventsRequest extends Request
{
    /**
     * @param array{
     *     Filters: Shapes\ListEventsFilters,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
