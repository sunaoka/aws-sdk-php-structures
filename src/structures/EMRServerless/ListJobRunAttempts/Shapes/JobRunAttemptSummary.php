<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListJobRunAttempts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $id
 * @property string $name
 * @property 'BATCH'|'STREAMING' $mode
 * @property string $arn
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $jobCreatedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $executionRole
 * @property 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED' $state
 * @property string $stateDetails
 * @property string $releaseLabel
 * @property string $type
 * @property int $attempt
 */
class JobRunAttemptSummary extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     id: string,
     *     name?: string,
     *     mode?: 'BATCH'|'STREAMING',
     *     arn: string,
     *     createdBy: string,
     *     jobCreatedAt: \Aws\Api\DateTimeResult,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     executionRole: string,
     *     state: 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED',
     *     stateDetails: string,
     *     releaseLabel: string,
     *     type?: string,
     *     attempt?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
