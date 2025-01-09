<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodesSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SyncName
 * @property list<Shapes\NodeFilter> $Filters
 * @property list<Shapes\NodeAggregator> $Aggregators
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListNodesSummaryRequest extends Request
{
    /**
     * @param array{
     *     SyncName?: string,
     *     Filters?: list<Shapes\NodeFilter>,
     *     Aggregators: list<Shapes\NodeAggregator>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
