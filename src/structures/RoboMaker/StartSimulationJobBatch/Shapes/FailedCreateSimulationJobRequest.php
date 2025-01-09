<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimulationJobRequest $request
 * @property string $failureReason
 * @property 'InternalServiceError'|'RobotApplicationCrash'|'SimulationApplicationCrash'|'RobotApplicationHealthCheckFailure'|'SimulationApplicationHealthCheckFailure'|'BadPermissionsRobotApplication'|'BadPermissionsSimulationApplication'|'BadPermissionsS3Object'|'BadPermissionsS3Output'|'BadPermissionsCloudwatchLogs'|'SubnetIpLimitExceeded'|'ENILimitExceeded'|'BadPermissionsUserCredentials'|'InvalidBundleRobotApplication'|'InvalidBundleSimulationApplication'|'InvalidS3Resource'|'ThrottlingError'|'LimitExceeded'|'MismatchedEtag'|'RobotApplicationVersionMismatchedEtag'|'SimulationApplicationVersionMismatchedEtag'|'ResourceNotFound'|'RequestThrottled'|'BatchTimedOut'|'BatchCanceled'|'InvalidInput'|'WrongRegionS3Bucket'|'WrongRegionS3Output'|'WrongRegionRobotApplication'|'WrongRegionSimulationApplication'|'UploadContentMismatchError' $failureCode
 * @property \Aws\Api\DateTimeResult $failedAt
 */
class FailedCreateSimulationJobRequest extends Shape
{
    /**
     * @param array{
     *     request?: SimulationJobRequest,
     *     failureReason?: string,
     *     failureCode?: 'InternalServiceError'|'RobotApplicationCrash'|'SimulationApplicationCrash'|'RobotApplicationHealthCheckFailure'|'SimulationApplicationHealthCheckFailure'|'BadPermissionsRobotApplication'|'BadPermissionsSimulationApplication'|'BadPermissionsS3Object'|'BadPermissionsS3Output'|'BadPermissionsCloudwatchLogs'|'SubnetIpLimitExceeded'|'ENILimitExceeded'|'BadPermissionsUserCredentials'|'InvalidBundleRobotApplication'|'InvalidBundleSimulationApplication'|'InvalidS3Resource'|'ThrottlingError'|'LimitExceeded'|'MismatchedEtag'|'RobotApplicationVersionMismatchedEtag'|'SimulationApplicationVersionMismatchedEtag'|'ResourceNotFound'|'RequestThrottled'|'BatchTimedOut'|'BatchCanceled'|'InvalidInput'|'WrongRegionS3Bucket'|'WrongRegionS3Output'|'WrongRegionRobotApplication'|'WrongRegionSimulationApplication'|'UploadContentMismatchError',
     *     failedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
