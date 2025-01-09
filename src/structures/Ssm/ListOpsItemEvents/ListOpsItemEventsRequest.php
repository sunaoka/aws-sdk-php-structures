<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\OpsItemEventFilter> $Filters
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListOpsItemEventsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\OpsItemEventFilter>,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
