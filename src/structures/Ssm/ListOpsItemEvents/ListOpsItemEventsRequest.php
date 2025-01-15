<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\OpsItemEventFilter>|null $Filters
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListOpsItemEventsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\OpsItemEventFilter>|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
