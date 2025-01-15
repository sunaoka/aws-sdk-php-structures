<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsEcsServiceCapacityProviderStrategyDetails>|null $CapacityProviderStrategy
 * @property string|null $Cluster
 * @property AwsEcsServiceDeploymentConfigurationDetails|null $DeploymentConfiguration
 * @property AwsEcsServiceDeploymentControllerDetails|null $DeploymentController
 * @property int|null $DesiredCount
 * @property bool|null $EnableEcsManagedTags
 * @property bool|null $EnableExecuteCommand
 * @property int|null $HealthCheckGracePeriodSeconds
 * @property string|null $LaunchType
 * @property list<AwsEcsServiceLoadBalancersDetails>|null $LoadBalancers
 * @property string|null $Name
 * @property AwsEcsServiceNetworkConfigurationDetails|null $NetworkConfiguration
 * @property list<AwsEcsServicePlacementConstraintsDetails>|null $PlacementConstraints
 * @property list<AwsEcsServicePlacementStrategiesDetails>|null $PlacementStrategies
 * @property string|null $PlatformVersion
 * @property string|null $PropagateTags
 * @property string|null $Role
 * @property string|null $SchedulingStrategy
 * @property string|null $ServiceArn
 * @property string|null $ServiceName
 * @property list<AwsEcsServiceServiceRegistriesDetails>|null $ServiceRegistries
 * @property string|null $TaskDefinition
 */
class AwsEcsServiceDetails extends Shape
{
    /**
     * @param array{
     *     CapacityProviderStrategy?: list<AwsEcsServiceCapacityProviderStrategyDetails>|null,
     *     Cluster?: string|null,
     *     DeploymentConfiguration?: AwsEcsServiceDeploymentConfigurationDetails|null,
     *     DeploymentController?: AwsEcsServiceDeploymentControllerDetails|null,
     *     DesiredCount?: int|null,
     *     EnableEcsManagedTags?: bool|null,
     *     EnableExecuteCommand?: bool|null,
     *     HealthCheckGracePeriodSeconds?: int|null,
     *     LaunchType?: string|null,
     *     LoadBalancers?: list<AwsEcsServiceLoadBalancersDetails>|null,
     *     Name?: string|null,
     *     NetworkConfiguration?: AwsEcsServiceNetworkConfigurationDetails|null,
     *     PlacementConstraints?: list<AwsEcsServicePlacementConstraintsDetails>|null,
     *     PlacementStrategies?: list<AwsEcsServicePlacementStrategiesDetails>|null,
     *     PlatformVersion?: string|null,
     *     PropagateTags?: string|null,
     *     Role?: string|null,
     *     SchedulingStrategy?: string|null,
     *     ServiceArn?: string|null,
     *     ServiceName?: string|null,
     *     ServiceRegistries?: list<AwsEcsServiceServiceRegistriesDetails>|null,
     *     TaskDefinition?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
