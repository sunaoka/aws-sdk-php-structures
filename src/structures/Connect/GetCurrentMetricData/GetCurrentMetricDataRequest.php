<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\Filters $Filters
 * @property list<'QUEUE'|'CHANNEL'|'ROUTING_PROFILE'|'ROUTING_STEP_EXPRESSION'> $Groupings
 * @property list<Shapes\CurrentMetric> $CurrentMetrics
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<Shapes\CurrentMetricSortCriteria> $SortCriteria
 */
class GetCurrentMetricDataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Filters: Shapes\Filters,
     *     Groupings?: list<'QUEUE'|'CHANNEL'|'ROUTING_PROFILE'|'ROUTING_STEP_EXPRESSION'>,
     *     CurrentMetrics: list<Shapes\CurrentMetric>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SortCriteria?: list<Shapes\CurrentMetricSortCriteria>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
