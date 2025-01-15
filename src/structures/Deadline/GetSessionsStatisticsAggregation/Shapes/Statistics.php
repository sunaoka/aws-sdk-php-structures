<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $queueId
 * @property string|null $fleetId
 * @property string|null $jobId
 * @property string|null $jobName
 * @property string|null $userId
 * @property 'COMPUTE'|'LICENSE'|null $usageType
 * @property string|null $licenseProduct
 * @property string|null $instanceType
 * @property int $count
 * @property Stats $costInUsd
 * @property Stats $runtimeInSeconds
 * @property \Aws\Api\DateTimeResult|null $aggregationStartTime
 * @property \Aws\Api\DateTimeResult|null $aggregationEndTime
 */
class Statistics extends Shape
{
    /**
     * @param array{
     *     queueId?: string|null,
     *     fleetId?: string|null,
     *     jobId?: string|null,
     *     jobName?: string|null,
     *     userId?: string|null,
     *     usageType?: 'COMPUTE'|'LICENSE'|null,
     *     licenseProduct?: string|null,
     *     instanceType?: string|null,
     *     count: int,
     *     costInUsd: Stats,
     *     runtimeInSeconds: Stats,
     *     aggregationStartTime?: \Aws\Api\DateTimeResult|null,
     *     aggregationEndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
