<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsEcsServiceCapacityProviderStrategyDetails> $CapacityProviderStrategy
 * @property string $Cluster
 * @property AwsEcsServiceDeploymentConfigurationDetails $DeploymentConfiguration
 * @property AwsEcsServiceDeploymentControllerDetails $DeploymentController
 * @property int $DesiredCount
 * @property bool $EnableEcsManagedTags
 * @property bool $EnableExecuteCommand
 * @property int $HealthCheckGracePeriodSeconds
 * @property string $LaunchType
 * @property list<AwsEcsServiceLoadBalancersDetails> $LoadBalancers
 * @property string $Name
 * @property AwsEcsServiceNetworkConfigurationDetails $NetworkConfiguration
 * @property list<AwsEcsServicePlacementConstraintsDetails> $PlacementConstraints
 * @property list<AwsEcsServicePlacementStrategiesDetails> $PlacementStrategies
 * @property string $PlatformVersion
 * @property string $PropagateTags
 * @property string $Role
 * @property string $SchedulingStrategy
 * @property string $ServiceArn
 * @property string $ServiceName
 * @property list<AwsEcsServiceServiceRegistriesDetails> $ServiceRegistries
 * @property string $TaskDefinition
 */
class AwsEcsServiceDetails extends Shape
{
    /**
     * @param array{
     *     CapacityProviderStrategy?: list<AwsEcsServiceCapacityProviderStrategyDetails>,
     *     Cluster?: string,
     *     DeploymentConfiguration?: AwsEcsServiceDeploymentConfigurationDetails,
     *     DeploymentController?: AwsEcsServiceDeploymentControllerDetails,
     *     DesiredCount?: int,
     *     EnableEcsManagedTags?: bool,
     *     EnableExecuteCommand?: bool,
     *     HealthCheckGracePeriodSeconds?: int,
     *     LaunchType?: string,
     *     LoadBalancers?: list<AwsEcsServiceLoadBalancersDetails>,
     *     Name?: string,
     *     NetworkConfiguration?: AwsEcsServiceNetworkConfigurationDetails,
     *     PlacementConstraints?: list<AwsEcsServicePlacementConstraintsDetails>,
     *     PlacementStrategies?: list<AwsEcsServicePlacementStrategiesDetails>,
     *     PlatformVersion?: string,
     *     PropagateTags?: string,
     *     Role?: string,
     *     SchedulingStrategy?: string,
     *     ServiceArn?: string,
     *     ServiceName?: string,
     *     ServiceRegistries?: list<AwsEcsServiceServiceRegistriesDetails>,
     *     TaskDefinition?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
