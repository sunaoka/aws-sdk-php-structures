<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $jobId
 * @property string $thingGroupId
 * @property 'CONTINUOUS'|'SNAPSHOT' $targetSelection
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult $completedAt
 * @property bool $isConcurrent
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn?: string,
     *     jobId?: string,
     *     thingGroupId?: string,
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT',
     *     status?: 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     completedAt?: \Aws\Api\DateTimeResult,
     *     isConcurrent?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
