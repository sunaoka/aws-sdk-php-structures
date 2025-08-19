<?php

namespace Sunaoka\Aws\Structures\S3Control\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property string|null $Description
 * @property 'LambdaInvoke'|'S3PutObjectCopy'|'S3PutObjectAcl'|'S3PutObjectTagging'|'S3DeleteObjectTagging'|'S3InitiateRestoreObject'|'S3PutObjectLegalHold'|'S3PutObjectRetention'|'S3ReplicateObject'|'S3ComputeObjectChecksum'|null $Operation
 * @property int<0, 2147483647>|null $Priority
 * @property 'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TerminationDate
 * @property JobProgressSummary|null $ProgressSummary
 */
class JobListDescriptor extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     Description?: string|null,
     *     Operation?: 'LambdaInvoke'|'S3PutObjectCopy'|'S3PutObjectAcl'|'S3PutObjectTagging'|'S3DeleteObjectTagging'|'S3InitiateRestoreObject'|'S3PutObjectLegalHold'|'S3PutObjectRetention'|'S3ReplicateObject'|'S3ComputeObjectChecksum'|null,
     *     Priority?: int<0, 2147483647>|null,
     *     Status?: 'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     TerminationDate?: \Aws\Api\DateTimeResult|null,
     *     ProgressSummary?: JobProgressSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
