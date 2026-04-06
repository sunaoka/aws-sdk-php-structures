<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodesSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SyncName
 * @property list<Shapes\NodeFilter>|null $Filters
 * @property list<Shapes\NodeAggregator> $Aggregators
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListNodesSummaryRequest extends Request
{
    /**
     * @param array{
     *     SyncName?: string|null,
     *     Filters?: list<Shapes\NodeFilter>|null,
     *     Aggregators: list<Shapes\NodeAggregator>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
