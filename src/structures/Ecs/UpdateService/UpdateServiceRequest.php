<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $service
 * @property int $desiredCount
 * @property string $taskDefinition
 * @property list<Shapes\CapacityProviderStrategyItem> $capacityProviderStrategy
 * @property Shapes\DeploymentConfiguration $deploymentConfiguration
 * @property 'ENABLED'|'DISABLED' $availabilityZoneRebalancing
 * @property Shapes\NetworkConfiguration $networkConfiguration
 * @property list<Shapes\PlacementConstraint> $placementConstraints
 * @property list<Shapes\PlacementStrategy> $placementStrategy
 * @property string $platformVersion
 * @property bool $forceNewDeployment
 * @property int $healthCheckGracePeriodSeconds
 * @property bool $enableExecuteCommand
 * @property bool $enableECSManagedTags
 * @property list<Shapes\LoadBalancer> $loadBalancers
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE' $propagateTags
 * @property list<Shapes\ServiceRegistry> $serviceRegistries
 * @property Shapes\ServiceConnectConfiguration $serviceConnectConfiguration
 * @property list<Shapes\ServiceVolumeConfiguration> $volumeConfigurations
 * @property list<Shapes\VpcLatticeConfiguration> $vpcLatticeConfigurations
 */
class UpdateServiceRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     service: string,
     *     desiredCount?: int,
     *     taskDefinition?: string,
     *     capacityProviderStrategy?: list<Shapes\CapacityProviderStrategyItem>,
     *     deploymentConfiguration?: Shapes\DeploymentConfiguration,
     *     availabilityZoneRebalancing?: 'ENABLED'|'DISABLED',
     *     networkConfiguration?: Shapes\NetworkConfiguration,
     *     placementConstraints?: list<Shapes\PlacementConstraint>,
     *     placementStrategy?: list<Shapes\PlacementStrategy>,
     *     platformVersion?: string,
     *     forceNewDeployment?: bool,
     *     healthCheckGracePeriodSeconds?: int,
     *     enableExecuteCommand?: bool,
     *     enableECSManagedTags?: bool,
     *     loadBalancers?: list<Shapes\LoadBalancer>,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE',
     *     serviceRegistries?: list<Shapes\ServiceRegistry>,
     *     serviceConnectConfiguration?: Shapes\ServiceConnectConfiguration,
     *     volumeConfigurations?: list<Shapes\ServiceVolumeConfiguration>,
     *     vpcLatticeConfigurations?: list<Shapes\VpcLatticeConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
