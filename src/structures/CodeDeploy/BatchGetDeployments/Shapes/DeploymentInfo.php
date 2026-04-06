<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $applicationName
 * @property string|null $deploymentGroupName
 * @property string|null $deploymentConfigName
 * @property string|null $deploymentId
 * @property RevisionLocation|null $previousRevision
 * @property RevisionLocation|null $revision
 * @property 'Created'|'Queued'|'InProgress'|'Baking'|'Succeeded'|'Failed'|'Stopped'|'Ready'|null $status
 * @property ErrorInformation|null $errorInformation
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $completeTime
 * @property DeploymentOverview|null $deploymentOverview
 * @property string|null $description
 * @property 'user'|'autoscaling'|'codeDeployRollback'|'CodeDeploy'|'CodeDeployAutoUpdate'|'CloudFormation'|'CloudFormationRollback'|'autoscalingTermination'|null $creator
 * @property bool|null $ignoreApplicationStopFailures
 * @property AutoRollbackConfiguration|null $autoRollbackConfiguration
 * @property bool|null $updateOutdatedInstancesOnly
 * @property RollbackInfo|null $rollbackInfo
 * @property DeploymentStyle|null $deploymentStyle
 * @property TargetInstances|null $targetInstances
 * @property bool|null $instanceTerminationWaitTimeStarted
 * @property BlueGreenDeploymentConfiguration|null $blueGreenDeploymentConfiguration
 * @property LoadBalancerInfo|null $loadBalancerInfo
 * @property string|null $additionalDeploymentStatusInfo
 * @property 'DISALLOW'|'OVERWRITE'|'RETAIN'|null $fileExistsBehavior
 * @property list<string>|null $deploymentStatusMessages
 * @property 'Server'|'Lambda'|'ECS'|null $computePlatform
 * @property string|null $externalId
 * @property RelatedDeployments|null $relatedDeployments
 * @property AlarmConfiguration|null $overrideAlarmConfiguration
 */
class DeploymentInfo extends Shape
{
    /**
     * @param array{
     *     applicationName?: string|null,
     *     deploymentGroupName?: string|null,
     *     deploymentConfigName?: string|null,
     *     deploymentId?: string|null,
     *     previousRevision?: RevisionLocation|null,
     *     revision?: RevisionLocation|null,
     *     status?: 'Created'|'Queued'|'InProgress'|'Baking'|'Succeeded'|'Failed'|'Stopped'|'Ready'|null,
     *     errorInformation?: ErrorInformation|null,
     *     createTime?: \Aws\Api\DateTimeResult|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     completeTime?: \Aws\Api\DateTimeResult|null,
     *     deploymentOverview?: DeploymentOverview|null,
     *     description?: string|null,
     *     creator?: 'user'|'autoscaling'|'codeDeployRollback'|'CodeDeploy'|'CodeDeployAutoUpdate'|'CloudFormation'|'CloudFormationRollback'|'autoscalingTermination'|null,
     *     ignoreApplicationStopFailures?: bool|null,
     *     autoRollbackConfiguration?: AutoRollbackConfiguration|null,
     *     updateOutdatedInstancesOnly?: bool|null,
     *     rollbackInfo?: RollbackInfo|null,
     *     deploymentStyle?: DeploymentStyle|null,
     *     targetInstances?: TargetInstances|null,
     *     instanceTerminationWaitTimeStarted?: bool|null,
     *     blueGreenDeploymentConfiguration?: BlueGreenDeploymentConfiguration|null,
     *     loadBalancerInfo?: LoadBalancerInfo|null,
     *     additionalDeploymentStatusInfo?: string|null,
     *     fileExistsBehavior?: 'DISALLOW'|'OVERWRITE'|'RETAIN'|null,
     *     deploymentStatusMessages?: list<string>|null,
     *     computePlatform?: 'Server'|'Lambda'|'ECS'|null,
     *     externalId?: string|null,
     *     relatedDeployments?: RelatedDeployments|null,
     *     overrideAlarmConfiguration?: AlarmConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
