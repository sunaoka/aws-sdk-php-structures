<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $aggregationEndTime
 * @property \Aws\Api\DateTimeResult|null $aggregationStartTime
 * @property Stats $costInUsd
 * @property int $count
 * @property string|null $fleetId
 * @property string|null $instanceType
 * @property string|null $jobId
 * @property string|null $jobName
 * @property string|null $licenseProduct
 * @property string|null $queueId
 * @property Stats $runtimeInSeconds
 * @property 'COMPUTE'|'LICENSE'|null $usageType
 * @property string|null $userId
 */
class Statistics extends Shape
{
    /**
     * @param array{
     *     aggregationEndTime?: \Aws\Api\DateTimeResult|null,
     *     aggregationStartTime?: \Aws\Api\DateTimeResult|null,
     *     costInUsd: Stats,
     *     count: int,
     *     fleetId?: string|null,
     *     instanceType?: string|null,
     *     jobId?: string|null,
     *     jobName?: string|null,
     *     licenseProduct?: string|null,
     *     queueId?: string|null,
     *     runtimeInSeconds: Stats,
     *     usageType?: 'COMPUTE'|'LICENSE'|null,
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
