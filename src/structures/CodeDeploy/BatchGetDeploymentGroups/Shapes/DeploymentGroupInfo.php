<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationName
 * @property string $deploymentGroupId
 * @property string $deploymentGroupName
 * @property string $deploymentConfigName
 * @property list<EC2TagFilter> $ec2TagFilters
 * @property list<TagFilter> $onPremisesInstanceTagFilters
 * @property list<AutoScalingGroup> $autoScalingGroups
 * @property string $serviceRoleArn
 * @property RevisionLocation $targetRevision
 * @property list<TriggerConfig> $triggerConfigurations
 * @property AlarmConfiguration $alarmConfiguration
 * @property AutoRollbackConfiguration $autoRollbackConfiguration
 * @property DeploymentStyle $deploymentStyle
 * @property 'UPDATE'|'IGNORE' $outdatedInstancesStrategy
 * @property BlueGreenDeploymentConfiguration $blueGreenDeploymentConfiguration
 * @property LoadBalancerInfo $loadBalancerInfo
 * @property LastDeploymentInfo $lastSuccessfulDeployment
 * @property LastDeploymentInfo $lastAttemptedDeployment
 * @property EC2TagSet $ec2TagSet
 * @property OnPremisesTagSet $onPremisesTagSet
 * @property 'Server'|'Lambda'|'ECS' $computePlatform
 * @property list<ECSService> $ecsServices
 * @property bool $terminationHookEnabled
 */
class DeploymentGroupInfo extends Shape
{
    /**
     * @param array{
     *     applicationName?: string,
     *     deploymentGroupId?: string,
     *     deploymentGroupName?: string,
     *     deploymentConfigName?: string,
     *     ec2TagFilters?: list<EC2TagFilter>,
     *     onPremisesInstanceTagFilters?: list<TagFilter>,
     *     autoScalingGroups?: list<AutoScalingGroup>,
     *     serviceRoleArn?: string,
     *     targetRevision?: RevisionLocation,
     *     triggerConfigurations?: list<TriggerConfig>,
     *     alarmConfiguration?: AlarmConfiguration,
     *     autoRollbackConfiguration?: AutoRollbackConfiguration,
     *     deploymentStyle?: DeploymentStyle,
     *     outdatedInstancesStrategy?: 'UPDATE'|'IGNORE',
     *     blueGreenDeploymentConfiguration?: BlueGreenDeploymentConfiguration,
     *     loadBalancerInfo?: LoadBalancerInfo,
     *     lastSuccessfulDeployment?: LastDeploymentInfo,
     *     lastAttemptedDeployment?: LastDeploymentInfo,
     *     ec2TagSet?: EC2TagSet,
     *     onPremisesTagSet?: OnPremisesTagSet,
     *     computePlatform?: 'Server'|'Lambda'|'ECS',
     *     ecsServices?: list<ECSService>,
     *     terminationHookEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
