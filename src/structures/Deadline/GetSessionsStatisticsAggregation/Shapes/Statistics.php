<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queueId
 * @property string $fleetId
 * @property string $jobId
 * @property string $jobName
 * @property string $userId
 * @property 'COMPUTE'|'LICENSE' $usageType
 * @property string $licenseProduct
 * @property string $instanceType
 * @property int $count
 * @property Stats $costInUsd
 * @property Stats $runtimeInSeconds
 * @property \Aws\Api\DateTimeResult $aggregationStartTime
 * @property \Aws\Api\DateTimeResult $aggregationEndTime
 */
class Statistics extends Shape
{
    /**
     * @param array{
     *     queueId?: string,
     *     fleetId?: string,
     *     jobId?: string,
     *     jobName?: string,
     *     userId?: string,
     *     usageType?: 'COMPUTE'|'LICENSE',
     *     licenseProduct?: string,
     *     instanceType?: string,
     *     count: int,
     *     costInUsd: Stats,
     *     runtimeInSeconds: Stats,
     *     aggregationStartTime?: \Aws\Api\DateTimeResult,
     *     aggregationEndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
