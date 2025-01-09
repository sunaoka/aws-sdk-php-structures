<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SyncName
 * @property list<Shapes\OpsFilter> $Filters
 * @property list<Shapes\OpsAggregator> $Aggregators
 * @property list<Shapes\OpsResultAttribute> $ResultAttributes
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class GetOpsSummaryRequest extends Request
{
    /**
     * @param array{
     *     SyncName?: string,
     *     Filters?: list<Shapes\OpsFilter>,
     *     Aggregators?: list<Shapes\OpsAggregator>,
     *     ResultAttributes?: list<Shapes\OpsResultAttribute>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
