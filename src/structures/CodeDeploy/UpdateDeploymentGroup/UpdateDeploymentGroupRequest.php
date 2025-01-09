<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\UpdateDeploymentGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string $currentDeploymentGroupName
 * @property string $newDeploymentGroupName
 * @property string $deploymentConfigName
 * @property list<Shapes\EC2TagFilter> $ec2TagFilters
 * @property list<Shapes\TagFilter> $onPremisesInstanceTagFilters
 * @property list<string> $autoScalingGroups
 * @property string $serviceRoleArn
 * @property list<Shapes\TriggerConfig> $triggerConfigurations
 * @property Shapes\AlarmConfiguration $alarmConfiguration
 * @property Shapes\AutoRollbackConfiguration $autoRollbackConfiguration
 * @property 'UPDATE'|'IGNORE' $outdatedInstancesStrategy
 * @property Shapes\DeploymentStyle $deploymentStyle
 * @property Shapes\BlueGreenDeploymentConfiguration $blueGreenDeploymentConfiguration
 * @property Shapes\LoadBalancerInfo $loadBalancerInfo
 * @property Shapes\EC2TagSet $ec2TagSet
 * @property list<Shapes\ECSService> $ecsServices
 * @property Shapes\OnPremisesTagSet $onPremisesTagSet
 * @property bool $terminationHookEnabled
 */
class UpdateDeploymentGroupRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     currentDeploymentGroupName: string,
     *     newDeploymentGroupName?: string,
     *     deploymentConfigName?: string,
     *     ec2TagFilters?: list<Shapes\EC2TagFilter>,
     *     onPremisesInstanceTagFilters?: list<Shapes\TagFilter>,
     *     autoScalingGroups?: list<string>,
     *     serviceRoleArn?: string,
     *     triggerConfigurations?: list<Shapes\TriggerConfig>,
     *     alarmConfiguration?: Shapes\AlarmConfiguration,
     *     autoRollbackConfiguration?: Shapes\AutoRollbackConfiguration,
     *     outdatedInstancesStrategy?: 'UPDATE'|'IGNORE',
     *     deploymentStyle?: Shapes\DeploymentStyle,
     *     blueGreenDeploymentConfiguration?: Shapes\BlueGreenDeploymentConfiguration,
     *     loadBalancerInfo?: Shapes\LoadBalancerInfo,
     *     ec2TagSet?: Shapes\EC2TagSet,
     *     ecsServices?: list<Shapes\ECSService>,
     *     onPremisesTagSet?: Shapes\OnPremisesTagSet,
     *     terminationHookEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
