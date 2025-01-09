<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property Shapes\Filters $Filters
 * @property list<'QUEUE'|'CHANNEL'|'ROUTING_PROFILE'|'ROUTING_STEP_EXPRESSION'> $Groupings
 * @property list<Shapes\HistoricalMetric> $HistoricalMetrics
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetMetricDataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Filters: Shapes\Filters,
     *     Groupings?: list<'QUEUE'|'CHANNEL'|'ROUTING_PROFILE'|'ROUTING_STEP_EXPRESSION'>,
     *     HistoricalMetrics: list<Shapes\HistoricalMetric>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
