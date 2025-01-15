<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SyncName
 * @property list<Shapes\OpsFilter>|null $Filters
 * @property list<Shapes\OpsAggregator>|null $Aggregators
 * @property list<Shapes\OpsResultAttribute>|null $ResultAttributes
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class GetOpsSummaryRequest extends Request
{
    /**
     * @param array{
     *     SyncName?: string|null,
     *     Filters?: list<Shapes\OpsFilter>|null,
     *     Aggregators?: list<Shapes\OpsAggregator>|null,
     *     ResultAttributes?: list<Shapes\OpsResultAttribute>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
