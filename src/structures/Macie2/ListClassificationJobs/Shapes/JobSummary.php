<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3BucketCriteriaForJob|null $bucketCriteria
 * @property list<S3BucketDefinitionForJob>|null $bucketDefinitions
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $jobId
 * @property 'RUNNING'|'PAUSED'|'CANCELLED'|'COMPLETE'|'IDLE'|'USER_PAUSED'|null $jobStatus
 * @property 'ONE_TIME'|'SCHEDULED'|null $jobType
 * @property LastRunErrorStatus|null $lastRunErrorStatus
 * @property string|null $name
 * @property UserPausedDetails|null $userPausedDetails
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     bucketCriteria?: S3BucketCriteriaForJob|null,
     *     bucketDefinitions?: list<S3BucketDefinitionForJob>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     jobId?: string|null,
     *     jobStatus?: 'RUNNING'|'PAUSED'|'CANCELLED'|'COMPLETE'|'IDLE'|'USER_PAUSED'|null,
     *     jobType?: 'ONE_TIME'|'SCHEDULED'|null,
     *     lastRunErrorStatus?: LastRunErrorStatus|null,
     *     name?: string|null,
     *     userPausedDetails?: UserPausedDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
