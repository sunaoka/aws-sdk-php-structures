<?php

namespace Sunaoka\Aws\Structures\Deadline\StartSessionsStatisticsAggregation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $farmId
 * @property list<'QUEUE_ID'|'FLEET_ID'|'JOB_ID'|'USER_ID'|'USAGE_TYPE'|'INSTANCE_TYPE'|'LICENSE_PRODUCT'> $groupBy
 * @property 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|null $period
 * @property Shapes\SessionsStatisticsResources $resourceIds
 * @property \Aws\Api\DateTimeResult $startTime
 * @property list<'SUM'|'MIN'|'MAX'|'AVG'> $statistics
 * @property string|null $timezone
 */
class StartSessionsStatisticsAggregationRequest extends Request
{
    /**
     * @param array{
     *     endTime: \Aws\Api\DateTimeResult,
     *     farmId: string,
     *     groupBy: list<'QUEUE_ID'|'FLEET_ID'|'JOB_ID'|'USER_ID'|'USAGE_TYPE'|'INSTANCE_TYPE'|'LICENSE_PRODUCT'>,
     *     period?: 'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|null,
     *     resourceIds: Shapes\SessionsStatisticsResources,
     *     startTime: \Aws\Api\DateTimeResult,
     *     statistics: list<'SUM'|'MIN'|'MAX'|'AVG'>,
     *     timezone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
