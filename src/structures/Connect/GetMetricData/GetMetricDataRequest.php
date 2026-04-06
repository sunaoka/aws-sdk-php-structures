<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property Shapes\Filters $Filters
 * @property list<'QUEUE'|'CHANNEL'|'ROUTING_PROFILE'|'ROUTING_STEP_EXPRESSION'|'AGENT_STATUS'|'SUBTYPE'|'VALIDATION_TEST_TYPE'>|null $Groupings
 * @property list<Shapes\HistoricalMetric> $HistoricalMetrics
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetMetricDataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Filters: Shapes\Filters,
     *     Groupings?: list<'QUEUE'|'CHANNEL'|'ROUTING_PROFILE'|'ROUTING_STEP_EXPRESSION'|'AGENT_STATUS'|'SUBTYPE'|'VALIDATION_TEST_TYPE'>|null,
     *     HistoricalMetrics: list<Shapes\HistoricalMetric>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
