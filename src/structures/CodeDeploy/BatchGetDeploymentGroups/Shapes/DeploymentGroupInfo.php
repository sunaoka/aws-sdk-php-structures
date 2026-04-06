<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $applicationName
 * @property string|null $deploymentGroupId
 * @property string|null $deploymentGroupName
 * @property string|null $deploymentConfigName
 * @property list<EC2TagFilter>|null $ec2TagFilters
 * @property list<TagFilter>|null $onPremisesInstanceTagFilters
 * @property list<AutoScalingGroup>|null $autoScalingGroups
 * @property string|null $serviceRoleArn
 * @property RevisionLocation|null $targetRevision
 * @property list<TriggerConfig>|null $triggerConfigurations
 * @property AlarmConfiguration|null $alarmConfiguration
 * @property AutoRollbackConfiguration|null $autoRollbackConfiguration
 * @property DeploymentStyle|null $deploymentStyle
 * @property 'UPDATE'|'IGNORE'|null $outdatedInstancesStrategy
 * @property BlueGreenDeploymentConfiguration|null $blueGreenDeploymentConfiguration
 * @property LoadBalancerInfo|null $loadBalancerInfo
 * @property LastDeploymentInfo|null $lastSuccessfulDeployment
 * @property LastDeploymentInfo|null $lastAttemptedDeployment
 * @property EC2TagSet|null $ec2TagSet
 * @property OnPremisesTagSet|null $onPremisesTagSet
 * @property 'Server'|'Lambda'|'ECS'|null $computePlatform
 * @property list<ECSService>|null $ecsServices
 * @property bool|null $terminationHookEnabled
 */
class DeploymentGroupInfo extends Shape
{
    /**
     * @param array{
     *     applicationName?: string|null,
     *     deploymentGroupId?: string|null,
     *     deploymentGroupName?: string|null,
     *     deploymentConfigName?: string|null,
     *     ec2TagFilters?: list<EC2TagFilter>|null,
     *     onPremisesInstanceTagFilters?: list<TagFilter>|null,
     *     autoScalingGroups?: list<AutoScalingGroup>|null,
     *     serviceRoleArn?: string|null,
     *     targetRevision?: RevisionLocation|null,
     *     triggerConfigurations?: list<TriggerConfig>|null,
     *     alarmConfiguration?: AlarmConfiguration|null,
     *     autoRollbackConfiguration?: AutoRollbackConfiguration|null,
     *     deploymentStyle?: DeploymentStyle|null,
     *     outdatedInstancesStrategy?: 'UPDATE'|'IGNORE'|null,
     *     blueGreenDeploymentConfiguration?: BlueGreenDeploymentConfiguration|null,
     *     loadBalancerInfo?: LoadBalancerInfo|null,
     *     lastSuccessfulDeployment?: LastDeploymentInfo|null,
     *     lastAttemptedDeployment?: LastDeploymentInfo|null,
     *     ec2TagSet?: EC2TagSet|null,
     *     onPremisesTagSet?: OnPremisesTagSet|null,
     *     computePlatform?: 'Server'|'Lambda'|'ECS'|null,
     *     ecsServices?: list<ECSService>|null,
     *     terminationHookEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
