<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property bool|null $ConfirmationRequired
 * @property string|null $Description
 * @property string|null $JobArn
 * @property 'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended'|null $Status
 * @property JobManifest|null $Manifest
 * @property JobOperation|null $Operation
 * @property int<0, 2147483647>|null $Priority
 * @property JobProgressSummary|null $ProgressSummary
 * @property string|null $StatusUpdateReason
 * @property list<JobFailure>|null $FailureReasons
 * @property JobReport|null $Report
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TerminationDate
 * @property string|null $RoleArn
 * @property \Aws\Api\DateTimeResult|null $SuspendedDate
 * @property string|null $SuspendedCause
 * @property JobManifestGenerator|null $ManifestGenerator
 * @property S3GeneratedManifestDescriptor|null $GeneratedManifestDescriptor
 */
class JobDescriptor extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     ConfirmationRequired?: bool|null,
     *     Description?: string|null,
     *     JobArn?: string|null,
     *     Status?: 'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended'|null,
     *     Manifest?: JobManifest|null,
     *     Operation?: JobOperation|null,
     *     Priority?: int<0, 2147483647>|null,
     *     ProgressSummary?: JobProgressSummary|null,
     *     StatusUpdateReason?: string|null,
     *     FailureReasons?: list<JobFailure>|null,
     *     Report?: JobReport|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     TerminationDate?: \Aws\Api\DateTimeResult|null,
     *     RoleArn?: string|null,
     *     SuspendedDate?: \Aws\Api\DateTimeResult|null,
     *     SuspendedCause?: string|null,
     *     ManifestGenerator?: JobManifestGenerator|null,
     *     GeneratedManifestDescriptor?: S3GeneratedManifestDescriptor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
