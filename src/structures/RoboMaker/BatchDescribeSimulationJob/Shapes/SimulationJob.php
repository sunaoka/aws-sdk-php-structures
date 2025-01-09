<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property 'Pending'|'Preparing'|'Running'|'Restarting'|'Completed'|'Failed'|'RunningFailed'|'Terminating'|'Terminated'|'Canceled' $status
 * @property \Aws\Api\DateTimeResult $lastStartedAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'Fail'|'Continue' $failureBehavior
 * @property 'InternalServiceError'|'RobotApplicationCrash'|'SimulationApplicationCrash'|'RobotApplicationHealthCheckFailure'|'SimulationApplicationHealthCheckFailure'|'BadPermissionsRobotApplication'|'BadPermissionsSimulationApplication'|'BadPermissionsS3Object'|'BadPermissionsS3Output'|'BadPermissionsCloudwatchLogs'|'SubnetIpLimitExceeded'|'ENILimitExceeded'|'BadPermissionsUserCredentials'|'InvalidBundleRobotApplication'|'InvalidBundleSimulationApplication'|'InvalidS3Resource'|'ThrottlingError'|'LimitExceeded'|'MismatchedEtag'|'RobotApplicationVersionMismatchedEtag'|'SimulationApplicationVersionMismatchedEtag'|'ResourceNotFound'|'RequestThrottled'|'BatchTimedOut'|'BatchCanceled'|'InvalidInput'|'WrongRegionS3Bucket'|'WrongRegionS3Output'|'WrongRegionRobotApplication'|'WrongRegionSimulationApplication'|'UploadContentMismatchError' $failureCode
 * @property string $failureReason
 * @property string $clientRequestToken
 * @property OutputLocation $outputLocation
 * @property LoggingConfig $loggingConfig
 * @property int $maxJobDurationInSeconds
 * @property int $simulationTimeMillis
 * @property string $iamRole
 * @property list<RobotApplicationConfig> $robotApplications
 * @property list<SimulationApplicationConfig> $simulationApplications
 * @property list<DataSource> $dataSources
 * @property array<string, string> $tags
 * @property VPCConfigResponse $vpcConfig
 * @property NetworkInterface $networkInterface
 * @property ComputeResponse $compute
 */
class SimulationJob extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     status?: 'Pending'|'Preparing'|'Running'|'Restarting'|'Completed'|'Failed'|'RunningFailed'|'Terminating'|'Terminated'|'Canceled',
     *     lastStartedAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     failureBehavior?: 'Fail'|'Continue',
     *     failureCode?: 'InternalServiceError'|'RobotApplicationCrash'|'SimulationApplicationCrash'|'RobotApplicationHealthCheckFailure'|'SimulationApplicationHealthCheckFailure'|'BadPermissionsRobotApplication'|'BadPermissionsSimulationApplication'|'BadPermissionsS3Object'|'BadPermissionsS3Output'|'BadPermissionsCloudwatchLogs'|'SubnetIpLimitExceeded'|'ENILimitExceeded'|'BadPermissionsUserCredentials'|'InvalidBundleRobotApplication'|'InvalidBundleSimulationApplication'|'InvalidS3Resource'|'ThrottlingError'|'LimitExceeded'|'MismatchedEtag'|'RobotApplicationVersionMismatchedEtag'|'SimulationApplicationVersionMismatchedEtag'|'ResourceNotFound'|'RequestThrottled'|'BatchTimedOut'|'BatchCanceled'|'InvalidInput'|'WrongRegionS3Bucket'|'WrongRegionS3Output'|'WrongRegionRobotApplication'|'WrongRegionSimulationApplication'|'UploadContentMismatchError',
     *     failureReason?: string,
     *     clientRequestToken?: string,
     *     outputLocation?: OutputLocation,
     *     loggingConfig?: LoggingConfig,
     *     maxJobDurationInSeconds?: int,
     *     simulationTimeMillis?: int,
     *     iamRole?: string,
     *     robotApplications?: list<RobotApplicationConfig>,
     *     simulationApplications?: list<SimulationApplicationConfig>,
     *     dataSources?: list<DataSource>,
     *     tags?: array<string, string>,
     *     vpcConfig?: VPCConfigResponse,
     *     networkInterface?: NetworkInterface,
     *     compute?: ComputeResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
