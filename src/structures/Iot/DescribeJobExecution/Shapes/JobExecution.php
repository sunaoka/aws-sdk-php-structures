<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED' $status
 * @property bool $forceCanceled
 * @property JobExecutionStatusDetails $statusDetails
 * @property string $thingArn
 * @property \Aws\Api\DateTimeResult $queuedAt
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property int $executionNumber
 * @property int $versionNumber
 * @property int $approximateSecondsBeforeTimedOut
 */
class JobExecution extends Shape
{
    /**
     * @param array{
     *     jobId?: string,
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED',
     *     forceCanceled?: bool,
     *     statusDetails?: JobExecutionStatusDetails,
     *     thingArn?: string,
     *     queuedAt?: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     executionNumber?: int,
     *     versionNumber?: int,
     *     approximateSecondsBeforeTimedOut?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
