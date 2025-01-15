<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListEventsFilters $Filters
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $AccountId
 */
class ListEventsRequest extends Request
{
    /**
     * @param array{
     *     Filters: Shapes\ListEventsFilters,
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
