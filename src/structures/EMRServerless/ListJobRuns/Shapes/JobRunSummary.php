<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $id
 * @property string $name
 * @property 'BATCH'|'STREAMING' $mode
 * @property string $arn
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $executionRole
 * @property 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED' $state
 * @property string $stateDetails
 * @property string $releaseLabel
 * @property string $type
 * @property int<1, max> $attempt
 * @property \Aws\Api\DateTimeResult $attemptCreatedAt
 * @property \Aws\Api\DateTimeResult $attemptUpdatedAt
 */
class JobRunSummary extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     id: string,
     *     name?: string,
     *     mode?: 'BATCH'|'STREAMING',
     *     arn: string,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     executionRole: string,
     *     state: 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED',
     *     stateDetails: string,
     *     releaseLabel: string,
     *     type?: string,
     *     attempt?: int<1, max>,
     *     attemptCreatedAt?: \Aws\Api\DateTimeResult,
     *     attemptUpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
