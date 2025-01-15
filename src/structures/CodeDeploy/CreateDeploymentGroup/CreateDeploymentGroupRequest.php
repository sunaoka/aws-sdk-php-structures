<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string $deploymentGroupName
 * @property string|null $deploymentConfigName
 * @property list<Shapes\EC2TagFilter>|null $ec2TagFilters
 * @property list<Shapes\TagFilter>|null $onPremisesInstanceTagFilters
 * @property list<string>|null $autoScalingGroups
 * @property string $serviceRoleArn
 * @property list<Shapes\TriggerConfig>|null $triggerConfigurations
 * @property Shapes\AlarmConfiguration|null $alarmConfiguration
 * @property Shapes\AutoRollbackConfiguration|null $autoRollbackConfiguration
 * @property 'UPDATE'|'IGNORE'|null $outdatedInstancesStrategy
 * @property Shapes\DeploymentStyle|null $deploymentStyle
 * @property Shapes\BlueGreenDeploymentConfiguration|null $blueGreenDeploymentConfiguration
 * @property Shapes\LoadBalancerInfo|null $loadBalancerInfo
 * @property Shapes\EC2TagSet|null $ec2TagSet
 * @property list<Shapes\ECSService>|null $ecsServices
 * @property Shapes\OnPremisesTagSet|null $onPremisesTagSet
 * @property list<Shapes\Tag>|null $tags
 * @property bool|null $terminationHookEnabled
 */
class CreateDeploymentGroupRequest extends Request
{
    /**
     * @param array{
     *     applicationName: string,
     *     deploymentGroupName: string,
     *     deploymentConfigName?: string|null,
     *     ec2TagFilters?: list<Shapes\EC2TagFilter>|null,
     *     onPremisesInstanceTagFilters?: list<Shapes\TagFilter>|null,
     *     autoScalingGroups?: list<string>|null,
     *     serviceRoleArn: string,
     *     triggerConfigurations?: list<Shapes\TriggerConfig>|null,
     *     alarmConfiguration?: Shapes\AlarmConfiguration|null,
     *     autoRollbackConfiguration?: Shapes\AutoRollbackConfiguration|null,
     *     outdatedInstancesStrategy?: 'UPDATE'|'IGNORE'|null,
     *     deploymentStyle?: Shapes\DeploymentStyle|null,
     *     blueGreenDeploymentConfiguration?: Shapes\BlueGreenDeploymentConfiguration|null,
     *     loadBalancerInfo?: Shapes\LoadBalancerInfo|null,
     *     ec2TagSet?: Shapes\EC2TagSet|null,
     *     ecsServices?: list<Shapes\ECSService>|null,
     *     onPremisesTagSet?: Shapes\OnPremisesTagSet|null,
     *     tags?: list<Shapes\Tag>|null,
     *     terminationHookEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
