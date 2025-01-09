<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3BucketCriteriaForJob $bucketCriteria
 * @property list<S3BucketDefinitionForJob> $bucketDefinitions
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $jobId
 * @property 'RUNNING'|'PAUSED'|'CANCELLED'|'COMPLETE'|'IDLE'|'USER_PAUSED' $jobStatus
 * @property 'ONE_TIME'|'SCHEDULED' $jobType
 * @property LastRunErrorStatus $lastRunErrorStatus
 * @property string $name
 * @property UserPausedDetails $userPausedDetails
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     bucketCriteria?: S3BucketCriteriaForJob,
     *     bucketDefinitions?: list<S3BucketDefinitionForJob>,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     jobId?: string,
     *     jobStatus?: 'RUNNING'|'PAUSED'|'CANCELLED'|'COMPLETE'|'IDLE'|'USER_PAUSED',
     *     jobType?: 'ONE_TIME'|'SCHEDULED',
     *     lastRunErrorStatus?: LastRunErrorStatus,
     *     name?: string,
     *     userPausedDetails?: UserPausedDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
