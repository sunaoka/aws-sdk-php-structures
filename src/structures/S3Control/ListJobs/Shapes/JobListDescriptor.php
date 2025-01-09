<?php

namespace Sunaoka\Aws\Structures\S3Control\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string $Description
 * @property 'LambdaInvoke'|'S3PutObjectCopy'|'S3PutObjectAcl'|'S3PutObjectTagging'|'S3DeleteObjectTagging'|'S3InitiateRestoreObject'|'S3PutObjectLegalHold'|'S3PutObjectRetention'|'S3ReplicateObject' $Operation
 * @property int<0, 2147483647> $Priority
 * @property 'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $TerminationDate
 * @property JobProgressSummary $ProgressSummary
 */
class JobListDescriptor extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     Description?: string,
     *     Operation?: 'LambdaInvoke'|'S3PutObjectCopy'|'S3PutObjectAcl'|'S3PutObjectTagging'|'S3DeleteObjectTagging'|'S3InitiateRestoreObject'|'S3PutObjectLegalHold'|'S3PutObjectRetention'|'S3ReplicateObject',
     *     Priority?: int<0, 2147483647>,
     *     Status?: 'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     TerminationDate?: \Aws\Api\DateTimeResult,
     *     ProgressSummary?: JobProgressSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
