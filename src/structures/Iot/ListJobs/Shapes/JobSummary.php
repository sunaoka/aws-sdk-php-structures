<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobArn
 * @property string|null $jobId
 * @property string|null $thingGroupId
 * @property 'CONTINUOUS'|'SNAPSHOT'|null $targetSelection
 * @property 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property bool|null $isConcurrent
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn?: string|null,
     *     jobId?: string|null,
     *     thingGroupId?: string|null,
     *     targetSelection?: 'CONTINUOUS'|'SNAPSHOT'|null,
     *     status?: 'IN_PROGRESS'|'CANCELED'|'COMPLETED'|'DELETION_IN_PROGRESS'|'SCHEDULED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     completedAt?: \Aws\Api\DateTimeResult|null,
     *     isConcurrent?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
