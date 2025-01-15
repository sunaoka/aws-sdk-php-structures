<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $id
 * @property string|null $name
 * @property 'BATCH'|'STREAMING'|null $mode
 * @property string $arn
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $executionRole
 * @property 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED' $state
 * @property string $stateDetails
 * @property string $releaseLabel
 * @property string|null $type
 * @property int<1, max>|null $attempt
 * @property \Aws\Api\DateTimeResult|null $attemptCreatedAt
 * @property \Aws\Api\DateTimeResult|null $attemptUpdatedAt
 */
class JobRunSummary extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     id: string,
     *     name?: string|null,
     *     mode?: 'BATCH'|'STREAMING'|null,
     *     arn: string,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     executionRole: string,
     *     state: 'SUBMITTED'|'PENDING'|'SCHEDULED'|'RUNNING'|'SUCCESS'|'FAILED'|'CANCELLING'|'CANCELLED'|'QUEUED',
     *     stateDetails: string,
     *     releaseLabel: string,
     *     type?: string|null,
     *     attempt?: int<1, max>|null,
     *     attemptCreatedAt?: \Aws\Api\DateTimeResult|null,
     *     attemptUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
