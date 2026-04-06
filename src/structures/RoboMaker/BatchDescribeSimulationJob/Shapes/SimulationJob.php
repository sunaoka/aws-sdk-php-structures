<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'Pending'|'Preparing'|'Running'|'Restarting'|'Completed'|'Failed'|'RunningFailed'|'Terminating'|'Terminated'|'Canceled'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastStartedAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property 'Fail'|'Continue'|null $failureBehavior
 * @property 'InternalServiceError'|'RobotApplicationCrash'|'SimulationApplicationCrash'|'RobotApplicationHealthCheckFailure'|'SimulationApplicationHealthCheckFailure'|'BadPermissionsRobotApplication'|'BadPermissionsSimulationApplication'|'BadPermissionsS3Object'|'BadPermissionsS3Output'|'BadPermissionsCloudwatchLogs'|'SubnetIpLimitExceeded'|'ENILimitExceeded'|'BadPermissionsUserCredentials'|'InvalidBundleRobotApplication'|'InvalidBundleSimulationApplication'|'InvalidS3Resource'|'ThrottlingError'|'LimitExceeded'|'MismatchedEtag'|'RobotApplicationVersionMismatchedEtag'|'SimulationApplicationVersionMismatchedEtag'|'ResourceNotFound'|'RequestThrottled'|'BatchTimedOut'|'BatchCanceled'|'InvalidInput'|'WrongRegionS3Bucket'|'WrongRegionS3Output'|'WrongRegionRobotApplication'|'WrongRegionSimulationApplication'|'UploadContentMismatchError'|null $failureCode
 * @property string|null $failureReason
 * @property string|null $clientRequestToken
 * @property OutputLocation|null $outputLocation
 * @property LoggingConfig|null $loggingConfig
 * @property int|null $maxJobDurationInSeconds
 * @property int|null $simulationTimeMillis
 * @property string|null $iamRole
 * @property list<RobotApplicationConfig>|null $robotApplications
 * @property list<SimulationApplicationConfig>|null $simulationApplications
 * @property list<DataSource>|null $dataSources
 * @property array<string, string>|null $tags
 * @property VPCConfigResponse|null $vpcConfig
 * @property NetworkInterface|null $networkInterface
 * @property ComputeResponse|null $compute
 */
class SimulationJob extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     status?: 'Pending'|'Preparing'|'Running'|'Restarting'|'Completed'|'Failed'|'RunningFailed'|'Terminating'|'Terminated'|'Canceled'|null,
     *     lastStartedAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     failureBehavior?: 'Fail'|'Continue'|null,
     *     failureCode?: 'InternalServiceError'|'RobotApplicationCrash'|'SimulationApplicationCrash'|'RobotApplicationHealthCheckFailure'|'SimulationApplicationHealthCheckFailure'|'BadPermissionsRobotApplication'|'BadPermissionsSimulationApplication'|'BadPermissionsS3Object'|'BadPermissionsS3Output'|'BadPermissionsCloudwatchLogs'|'SubnetIpLimitExceeded'|'ENILimitExceeded'|'BadPermissionsUserCredentials'|'InvalidBundleRobotApplication'|'InvalidBundleSimulationApplication'|'InvalidS3Resource'|'ThrottlingError'|'LimitExceeded'|'MismatchedEtag'|'RobotApplicationVersionMismatchedEtag'|'SimulationApplicationVersionMismatchedEtag'|'ResourceNotFound'|'RequestThrottled'|'BatchTimedOut'|'BatchCanceled'|'InvalidInput'|'WrongRegionS3Bucket'|'WrongRegionS3Output'|'WrongRegionRobotApplication'|'WrongRegionSimulationApplication'|'UploadContentMismatchError'|null,
     *     failureReason?: string|null,
     *     clientRequestToken?: string|null,
     *     outputLocation?: OutputLocation|null,
     *     loggingConfig?: LoggingConfig|null,
     *     maxJobDurationInSeconds?: int|null,
     *     simulationTimeMillis?: int|null,
     *     iamRole?: string|null,
     *     robotApplications?: list<RobotApplicationConfig>|null,
     *     simulationApplications?: list<SimulationApplicationConfig>|null,
     *     dataSources?: list<DataSource>|null,
     *     tags?: array<string, string>|null,
     *     vpcConfig?: VPCConfigResponse|null,
     *     networkInterface?: NetworkInterface|null,
     *     compute?: ComputeResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
