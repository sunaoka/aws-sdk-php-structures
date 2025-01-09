<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $serviceName
 * @property string $taskDefinition
 * @property 'ENABLED'|'DISABLED' $availabilityZoneRebalancing
 * @property list<Shapes\LoadBalancer> $loadBalancers
 * @property list<Shapes\ServiceRegistry> $serviceRegistries
 * @property int $desiredCount
 * @property string $clientToken
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $launchType
 * @property list<Shapes\CapacityProviderStrategyItem> $capacityProviderStrategy
 * @property string $platformVersion
 * @property string $role
 * @property Shapes\DeploymentConfiguration $deploymentConfiguration
 * @property list<Shapes\PlacementConstraint> $placementConstraints
 * @property list<Shapes\PlacementStrategy> $placementStrategy
 * @property Shapes\NetworkConfiguration $networkConfiguration
 * @property int $healthCheckGracePeriodSeconds
 * @property 'REPLICA'|'DAEMON' $schedulingStrategy
 * @property Shapes\DeploymentController $deploymentController
 * @property list<Shapes\Tag> $tags
 * @property bool $enableECSManagedTags
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE' $propagateTags
 * @property bool $enableExecuteCommand
 * @property Shapes\ServiceConnectConfiguration $serviceConnectConfiguration
 * @property list<Shapes\ServiceVolumeConfiguration> $volumeConfigurations
 * @property list<Shapes\VpcLatticeConfiguration> $vpcLatticeConfigurations
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     serviceName: string,
     *     taskDefinition?: string,
     *     availabilityZoneRebalancing?: 'ENABLED'|'DISABLED',
     *     loadBalancers?: list<Shapes\LoadBalancer>,
     *     serviceRegistries?: list<Shapes\ServiceRegistry>,
     *     desiredCount?: int,
     *     clientToken?: string,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL',
     *     capacityProviderStrategy?: list<Shapes\CapacityProviderStrategyItem>,
     *     platformVersion?: string,
     *     role?: string,
     *     deploymentConfiguration?: Shapes\DeploymentConfiguration,
     *     placementConstraints?: list<Shapes\PlacementConstraint>,
     *     placementStrategy?: list<Shapes\PlacementStrategy>,
     *     networkConfiguration?: Shapes\NetworkConfiguration,
     *     healthCheckGracePeriodSeconds?: int,
     *     schedulingStrategy?: 'REPLICA'|'DAEMON',
     *     deploymentController?: Shapes\DeploymentController,
     *     tags?: list<Shapes\Tag>,
     *     enableECSManagedTags?: bool,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE',
     *     enableExecuteCommand?: bool,
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
