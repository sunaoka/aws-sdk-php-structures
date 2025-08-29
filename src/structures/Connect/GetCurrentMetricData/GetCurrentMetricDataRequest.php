<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\Filters $Filters
 * @property list<'QUEUE'|'CHANNEL'|'ROUTING_PROFILE'|'ROUTING_STEP_EXPRESSION'|'AGENT_STATUS'>|null $Groupings
 * @property list<Shapes\CurrentMetric> $CurrentMetrics
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\CurrentMetricSortCriteria>|null $SortCriteria
 */
class GetCurrentMetricDataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Filters: Shapes\Filters,
     *     Groupings?: list<'QUEUE'|'CHANNEL'|'ROUTING_PROFILE'|'ROUTING_STEP_EXPRESSION'|'AGENT_STATUS'>|null,
     *     CurrentMetrics: list<Shapes\CurrentMetric>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SortCriteria?: list<Shapes\CurrentMetricSortCriteria>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
