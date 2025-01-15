<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobId
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null $status
 * @property bool|null $forceCanceled
 * @property JobExecutionStatusDetails|null $statusDetails
 * @property string|null $thingArn
 * @property \Aws\Api\DateTimeResult|null $queuedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property int|null $executionNumber
 * @property int|null $versionNumber
 * @property int|null $approximateSecondsBeforeTimedOut
 */
class JobExecution extends Shape
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null,
     *     forceCanceled?: bool|null,
     *     statusDetails?: JobExecutionStatusDetails|null,
     *     thingArn?: string|null,
     *     queuedAt?: \Aws\Api\DateTimeResult|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     executionNumber?: int|null,
     *     versionNumber?: int|null,
     *     approximateSecondsBeforeTimedOut?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
