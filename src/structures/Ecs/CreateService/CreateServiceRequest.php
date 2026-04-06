<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string $serviceName
 * @property string|null $taskDefinition
 * @property 'ENABLED'|'DISABLED'|null $availabilityZoneRebalancing
 * @property list<Shapes\LoadBalancer>|null $loadBalancers
 * @property list<Shapes\ServiceRegistry>|null $serviceRegistries
 * @property int|null $desiredCount
 * @property string|null $clientToken
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|null $launchType
 * @property list<Shapes\CapacityProviderStrategyItem>|null $capacityProviderStrategy
 * @property string|null $platformVersion
 * @property string|null $role
 * @property Shapes\DeploymentConfiguration|null $deploymentConfiguration
 * @property list<Shapes\PlacementConstraint>|null $placementConstraints
 * @property list<Shapes\PlacementStrategy>|null $placementStrategy
 * @property Shapes\NetworkConfiguration|null $networkConfiguration
 * @property int|null $healthCheckGracePeriodSeconds
 * @property 'REPLICA'|'DAEMON'|null $schedulingStrategy
 * @property Shapes\DeploymentController|null $deploymentController
 * @property list<Shapes\Tag>|null $tags
 * @property bool|null $enableECSManagedTags
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE'|null $propagateTags
 * @property bool|null $enableExecuteCommand
 * @property Shapes\ServiceConnectConfiguration|null $serviceConnectConfiguration
 * @property list<Shapes\ServiceVolumeConfiguration>|null $volumeConfigurations
 * @property list<Shapes\VpcLatticeConfiguration>|null $vpcLatticeConfigurations
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     serviceName: string,
     *     taskDefinition?: string|null,
     *     availabilityZoneRebalancing?: 'ENABLED'|'DISABLED'|null,
     *     loadBalancers?: list<Shapes\LoadBalancer>|null,
     *     serviceRegistries?: list<Shapes\ServiceRegistry>|null,
     *     desiredCount?: int|null,
     *     clientToken?: string|null,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL'|null,
     *     capacityProviderStrategy?: list<Shapes\CapacityProviderStrategyItem>|null,
     *     platformVersion?: string|null,
     *     role?: string|null,
     *     deploymentConfiguration?: Shapes\DeploymentConfiguration|null,
     *     placementConstraints?: list<Shapes\PlacementConstraint>|null,
     *     placementStrategy?: list<Shapes\PlacementStrategy>|null,
     *     networkConfiguration?: Shapes\NetworkConfiguration|null,
     *     healthCheckGracePeriodSeconds?: int|null,
     *     schedulingStrategy?: 'REPLICA'|'DAEMON'|null,
     *     deploymentController?: Shapes\DeploymentController|null,
     *     tags?: list<Shapes\Tag>|null,
     *     enableECSManagedTags?: bool|null,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE'|null,
     *     enableExecuteCommand?: bool|null,
     *     serviceConnectConfiguration?: Shapes\ServiceConnectConfiguration|null,
     *     volumeConfigurations?: list<Shapes\ServiceVolumeConfiguration>|null,
     *     vpcLatticeConfigurations?: list<Shapes\VpcLatticeConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
