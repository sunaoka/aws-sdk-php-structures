<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property bool $ConfirmationRequired
 * @property string $Description
 * @property string $JobArn
 * @property 'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended' $Status
 * @property JobManifest $Manifest
 * @property JobOperation $Operation
 * @property int $Priority
 * @property JobProgressSummary $ProgressSummary
 * @property string $StatusUpdateReason
 * @property list<JobFailure> $FailureReasons
 * @property JobReport $Report
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $TerminationDate
 * @property string $RoleArn
 * @property \Aws\Api\DateTimeResult $SuspendedDate
 * @property string $SuspendedCause
 * @property JobManifestGenerator $ManifestGenerator
 * @property S3GeneratedManifestDescriptor $GeneratedManifestDescriptor
 */
class JobDescriptor extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     ConfirmationRequired?: bool,
     *     Description?: string,
     *     JobArn?: string,
     *     Status?: 'Active'|'Cancelled'|'Cancelling'|'Complete'|'Completing'|'Failed'|'Failing'|'New'|'Paused'|'Pausing'|'Preparing'|'Ready'|'Suspended',
     *     Manifest?: JobManifest,
     *     Operation?: JobOperation,
     *     Priority?: int,
     *     ProgressSummary?: JobProgressSummary,
     *     StatusUpdateReason?: string,
     *     FailureReasons?: list<JobFailure>,
     *     Report?: JobReport,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     TerminationDate?: \Aws\Api\DateTimeResult,
     *     RoleArn?: string,
     *     SuspendedDate?: \Aws\Api\DateTimeResult,
     *     SuspendedCause?: string,
     *     ManifestGenerator?: JobManifestGenerator,
     *     GeneratedManifestDescriptor?: S3GeneratedManifestDescriptor
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
