<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string $service
 * @property int|null $desiredCount
 * @property string|null $taskDefinition
 * @property list<Shapes\CapacityProviderStrategyItem>|null $capacityProviderStrategy
 * @property Shapes\DeploymentConfiguration|null $deploymentConfiguration
 * @property 'ENABLED'|'DISABLED'|null $availabilityZoneRebalancing
 * @property Shapes\NetworkConfiguration|null $networkConfiguration
 * @property list<Shapes\PlacementConstraint>|null $placementConstraints
 * @property list<Shapes\PlacementStrategy>|null $placementStrategy
 * @property string|null $platformVersion
 * @property bool|null $forceNewDeployment
 * @property int|null $healthCheckGracePeriodSeconds
 * @property Shapes\DeploymentController|null $deploymentController
 * @property bool|null $enableExecuteCommand
 * @property bool|null $enableECSManagedTags
 * @property list<Shapes\LoadBalancer>|null $loadBalancers
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE'|null $propagateTags
 * @property list<Shapes\ServiceRegistry>|null $serviceRegistries
 * @property Shapes\ServiceConnectConfiguration|null $serviceConnectConfiguration
 * @property list<Shapes\ServiceVolumeConfiguration>|null $volumeConfigurations
 * @property list<Shapes\VpcLatticeConfiguration>|null $vpcLatticeConfigurations
 */
class UpdateServiceRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     service: string,
     *     desiredCount?: int|null,
     *     taskDefinition?: string|null,
     *     capacityProviderStrategy?: list<Shapes\CapacityProviderStrategyItem>|null,
     *     deploymentConfiguration?: Shapes\DeploymentConfiguration|null,
     *     availabilityZoneRebalancing?: 'ENABLED'|'DISABLED'|null,
     *     networkConfiguration?: Shapes\NetworkConfiguration|null,
     *     placementConstraints?: list<Shapes\PlacementConstraint>|null,
     *     placementStrategy?: list<Shapes\PlacementStrategy>|null,
     *     platformVersion?: string|null,
     *     forceNewDeployment?: bool|null,
     *     healthCheckGracePeriodSeconds?: int|null,
     *     deploymentController?: Shapes\DeploymentController|null,
     *     enableExecuteCommand?: bool|null,
     *     enableECSManagedTags?: bool|null,
     *     loadBalancers?: list<Shapes\LoadBalancer>|null,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE'|null,
     *     serviceRegistries?: list<Shapes\ServiceRegistry>|null,
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
