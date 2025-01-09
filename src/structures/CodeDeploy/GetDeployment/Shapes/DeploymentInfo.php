<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationName
 * @property string $deploymentGroupName
 * @property string $deploymentConfigName
 * @property string $deploymentId
 * @property RevisionLocation $previousRevision
 * @property RevisionLocation $revision
 * @property 'Created'|'Queued'|'InProgress'|'Baking'|'Succeeded'|'Failed'|'Stopped'|'Ready' $status
 * @property ErrorInformation $errorInformation
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $completeTime
 * @property DeploymentOverview $deploymentOverview
 * @property string $description
 * @property 'user'|'autoscaling'|'codeDeployRollback'|'CodeDeploy'|'CodeDeployAutoUpdate'|'CloudFormation'|'CloudFormationRollback'|'autoscalingTermination' $creator
 * @property bool $ignoreApplicationStopFailures
 * @property AutoRollbackConfiguration $autoRollbackConfiguration
 * @property bool $updateOutdatedInstancesOnly
 * @property RollbackInfo $rollbackInfo
 * @property DeploymentStyle $deploymentStyle
 * @property TargetInstances $targetInstances
 * @property bool $instanceTerminationWaitTimeStarted
 * @property BlueGreenDeploymentConfiguration $blueGreenDeploymentConfiguration
 * @property LoadBalancerInfo $loadBalancerInfo
 * @property string $additionalDeploymentStatusInfo
 * @property 'DISALLOW'|'OVERWRITE'|'RETAIN' $fileExistsBehavior
 * @property list<string> $deploymentStatusMessages
 * @property 'Server'|'Lambda'|'ECS' $computePlatform
 * @property string $externalId
 * @property RelatedDeployments $relatedDeployments
 * @property AlarmConfiguration $overrideAlarmConfiguration
 */
class DeploymentInfo extends Shape
{
    /**
     * @param array{
     *     applicationName?: string,
     *     deploymentGroupName?: string,
     *     deploymentConfigName?: string,
     *     deploymentId?: string,
     *     previousRevision?: RevisionLocation,
     *     revision?: RevisionLocation,
     *     status?: 'Created'|'Queued'|'InProgress'|'Baking'|'Succeeded'|'Failed'|'Stopped'|'Ready',
     *     errorInformation?: ErrorInformation,
     *     createTime?: \Aws\Api\DateTimeResult,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     completeTime?: \Aws\Api\DateTimeResult,
     *     deploymentOverview?: DeploymentOverview,
     *     description?: string,
     *     creator?: 'user'|'autoscaling'|'codeDeployRollback'|'CodeDeploy'|'CodeDeployAutoUpdate'|'CloudFormation'|'CloudFormationRollback'|'autoscalingTermination',
     *     ignoreApplicationStopFailures?: bool,
     *     autoRollbackConfiguration?: AutoRollbackConfiguration,
     *     updateOutdatedInstancesOnly?: bool,
     *     rollbackInfo?: RollbackInfo,
     *     deploymentStyle?: DeploymentStyle,
     *     targetInstances?: TargetInstances,
     *     instanceTerminationWaitTimeStarted?: bool,
     *     blueGreenDeploymentConfiguration?: BlueGreenDeploymentConfiguration,
     *     loadBalancerInfo?: LoadBalancerInfo,
     *     additionalDeploymentStatusInfo?: string,
     *     fileExistsBehavior?: 'DISALLOW'|'OVERWRITE'|'RETAIN',
     *     deploymentStatusMessages?: list<string>,
     *     computePlatform?: 'Server'|'Lambda'|'ECS',
     *     externalId?: string,
     *     relatedDeployments?: RelatedDeployments,
     *     overrideAlarmConfiguration?: AlarmConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
