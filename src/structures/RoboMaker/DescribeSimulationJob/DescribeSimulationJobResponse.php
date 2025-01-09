<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJob;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\OutputLocation $outputLocation
 * @property Shapes\LoggingConfig $loggingConfig
 * @property int $maxJobDurationInSeconds
 * @property int $simulationTimeMillis
 * @property string $iamRole
 * @property list<Shapes\RobotApplicationConfig> $robotApplications
 * @property list<Shapes\SimulationApplicationConfig> $simulationApplications
 * @property list<Shapes\DataSource> $dataSources
 * @property array<string, string> $tags
 * @property Shapes\VPCConfigResponse $vpcConfig
 * @property Shapes\NetworkInterface $networkInterface
 * @property Shapes\ComputeResponse $compute
 */
class DescribeSimulationJobResponse extends Response
{
}
