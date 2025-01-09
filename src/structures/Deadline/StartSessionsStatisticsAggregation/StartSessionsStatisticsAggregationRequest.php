<?php

namespace Sunaoka\Aws\Structures\Deadline\StartSessionsStatisticsAggregation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property Shapes\SessionsStatisticsResources $resourceIds
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $timezone
 * @property 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY' $period
 * @property list<'QUEUE_ID'|'FLEET_ID'|'JOB_ID'|'USER_ID'|'USAGE_TYPE'|'INSTANCE_TYPE'|'LICENSE_PRODUCT'> $groupBy
 * @property list<'SUM'|'MIN'|'MAX'|'AVG'> $statistics
 */
class StartSessionsStatisticsAggregationRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     resourceIds: Shapes\SessionsStatisticsResources,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     timezone?: string,
     *     period?: 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY',
     *     groupBy: list<'QUEUE_ID'|'FLEET_ID'|'JOB_ID'|'USER_ID'|'USAGE_TYPE'|'INSTANCE_TYPE'|'LICENSE_PRODUCT'>,
     *     statistics: list<'SUM'|'MIN'|'MAX'|'AVG'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
