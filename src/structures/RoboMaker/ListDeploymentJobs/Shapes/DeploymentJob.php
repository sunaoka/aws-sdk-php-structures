<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListDeploymentJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $fleet
 * @property 'Pending'|'Preparing'|'InProgress'|'Failed'|'Succeeded'|'Canceled'|null $status
 * @property list<DeploymentApplicationConfig>|null $deploymentApplicationConfigs
 * @property DeploymentConfig|null $deploymentConfig
 * @property string|null $failureReason
 * @property 'ResourceNotFound'|'EnvironmentSetupError'|'EtagMismatch'|'FailureThresholdBreached'|'RobotDeploymentAborted'|'RobotDeploymentNoResponse'|'RobotAgentConnectionTimeout'|'GreengrassDeploymentFailed'|'InvalidGreengrassGroup'|'MissingRobotArchitecture'|'MissingRobotApplicationArchitecture'|'MissingRobotDeploymentResource'|'GreengrassGroupVersionDoesNotExist'|'LambdaDeleted'|'ExtractingBundleFailure'|'PreLaunchFileFailure'|'PostLaunchFileFailure'|'BadPermissionError'|'DownloadConditionFailed'|'BadLambdaAssociated'|'InternalServerError'|'RobotApplicationDoesNotExist'|'DeploymentFleetDoesNotExist'|'FleetDeploymentTimeout'|null $failureCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class DeploymentJob extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     fleet?: string|null,
     *     status?: 'Pending'|'Preparing'|'InProgress'|'Failed'|'Succeeded'|'Canceled'|null,
     *     deploymentApplicationConfigs?: list<DeploymentApplicationConfig>|null,
     *     deploymentConfig?: DeploymentConfig|null,
     *     failureReason?: string|null,
     *     failureCode?: 'ResourceNotFound'|'EnvironmentSetupError'|'EtagMismatch'|'FailureThresholdBreached'|'RobotDeploymentAborted'|'RobotDeploymentNoResponse'|'RobotAgentConnectionTimeout'|'GreengrassDeploymentFailed'|'InvalidGreengrassGroup'|'MissingRobotArchitecture'|'MissingRobotApplicationArchitecture'|'MissingRobotDeploymentResource'|'GreengrassGroupVersionDoesNotExist'|'LambdaDeleted'|'ExtractingBundleFailure'|'PreLaunchFileFailure'|'PostLaunchFileFailure'|'BadPermissionError'|'DownloadConditionFailed'|'BadLambdaAssociated'|'InternalServerError'|'RobotApplicationDoesNotExist'|'DeploymentFleetDoesNotExist'|'FleetDeploymentTimeout'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
