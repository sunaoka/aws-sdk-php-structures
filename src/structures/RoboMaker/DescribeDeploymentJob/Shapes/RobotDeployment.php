<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeDeploymentJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $deploymentStartTime
 * @property \Aws\Api\DateTimeResult $deploymentFinishTime
 * @property 'Available'|'Registered'|'PendingNewDeployment'|'Deploying'|'Failed'|'InSync'|'NoResponse' $status
 * @property ProgressDetail $progressDetail
 * @property string $failureReason
 * @property 'ResourceNotFound'|'EnvironmentSetupError'|'EtagMismatch'|'FailureThresholdBreached'|'RobotDeploymentAborted'|'RobotDeploymentNoResponse'|'RobotAgentConnectionTimeout'|'GreengrassDeploymentFailed'|'InvalidGreengrassGroup'|'MissingRobotArchitecture'|'MissingRobotApplicationArchitecture'|'MissingRobotDeploymentResource'|'GreengrassGroupVersionDoesNotExist'|'LambdaDeleted'|'ExtractingBundleFailure'|'PreLaunchFileFailure'|'PostLaunchFileFailure'|'BadPermissionError'|'DownloadConditionFailed'|'BadLambdaAssociated'|'InternalServerError'|'RobotApplicationDoesNotExist'|'DeploymentFleetDoesNotExist'|'FleetDeploymentTimeout' $failureCode
 */
class RobotDeployment extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     deploymentStartTime?: \Aws\Api\DateTimeResult,
     *     deploymentFinishTime?: \Aws\Api\DateTimeResult,
     *     status?: 'Available'|'Registered'|'PendingNewDeployment'|'Deploying'|'Failed'|'InSync'|'NoResponse',
     *     progressDetail?: ProgressDetail,
     *     failureReason?: string,
     *     failureCode?: 'ResourceNotFound'|'EnvironmentSetupError'|'EtagMismatch'|'FailureThresholdBreached'|'RobotDeploymentAborted'|'RobotDeploymentNoResponse'|'RobotAgentConnectionTimeout'|'GreengrassDeploymentFailed'|'InvalidGreengrassGroup'|'MissingRobotArchitecture'|'MissingRobotApplicationArchitecture'|'MissingRobotDeploymentResource'|'GreengrassGroupVersionDoesNotExist'|'LambdaDeleted'|'ExtractingBundleFailure'|'PreLaunchFileFailure'|'PostLaunchFileFailure'|'BadPermissionError'|'DownloadConditionFailed'|'BadLambdaAssociated'|'InternalServerError'|'RobotApplicationDoesNotExist'|'DeploymentFleetDoesNotExist'|'FleetDeploymentTimeout'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
