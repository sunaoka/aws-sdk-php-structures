<?php

namespace Sunaoka\Aws\Structures\RoboMaker\SyncDeploymentJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $fleet
 * @property 'Pending'|'Preparing'|'InProgress'|'Failed'|'Succeeded'|'Canceled' $status
 * @property Shapes\DeploymentConfig $deploymentConfig
 * @property list<Shapes\DeploymentApplicationConfig> $deploymentApplicationConfigs
 * @property string $failureReason
 * @property 'ResourceNotFound'|'EnvironmentSetupError'|'EtagMismatch'|'FailureThresholdBreached'|'RobotDeploymentAborted'|'RobotDeploymentNoResponse'|'RobotAgentConnectionTimeout'|'GreengrassDeploymentFailed'|'InvalidGreengrassGroup'|'MissingRobotArchitecture'|'MissingRobotApplicationArchitecture'|'MissingRobotDeploymentResource'|'GreengrassGroupVersionDoesNotExist'|'LambdaDeleted'|'ExtractingBundleFailure'|'PreLaunchFileFailure'|'PostLaunchFileFailure'|'BadPermissionError'|'DownloadConditionFailed'|'BadLambdaAssociated'|'InternalServerError'|'RobotApplicationDoesNotExist'|'DeploymentFleetDoesNotExist'|'FleetDeploymentTimeout' $failureCode
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class SyncDeploymentJobResponse extends Response
{
}
