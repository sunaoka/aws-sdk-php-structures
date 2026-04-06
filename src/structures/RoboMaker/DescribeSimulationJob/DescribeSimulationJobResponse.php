<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJob;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\OutputLocation|null $outputLocation
 * @property Shapes\LoggingConfig|null $loggingConfig
 * @property int|null $maxJobDurationInSeconds
 * @property int|null $simulationTimeMillis
 * @property string|null $iamRole
 * @property list<Shapes\RobotApplicationConfig>|null $robotApplications
 * @property list<Shapes\SimulationApplicationConfig>|null $simulationApplications
 * @property list<Shapes\DataSource>|null $dataSources
 * @property array<string, string>|null $tags
 * @property Shapes\VPCConfigResponse|null $vpcConfig
 * @property Shapes\NetworkInterface|null $networkInterface
 * @property Shapes\ComputeResponse|null $compute
 */
class DescribeSimulationJobResponse extends Response
{
}
