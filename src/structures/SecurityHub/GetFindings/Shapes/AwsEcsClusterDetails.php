<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterArn
 * @property int|null $ActiveServicesCount
 * @property list<string>|null $CapacityProviders
 * @property list<AwsEcsClusterClusterSettingsDetails>|null $ClusterSettings
 * @property AwsEcsClusterConfigurationDetails|null $Configuration
 * @property list<AwsEcsClusterDefaultCapacityProviderStrategyDetails>|null $DefaultCapacityProviderStrategy
 * @property string|null $ClusterName
 * @property int|null $RegisteredContainerInstancesCount
 * @property int|null $RunningTasksCount
 * @property string|null $Status
 */
class AwsEcsClusterDetails extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string|null,
     *     ActiveServicesCount?: int|null,
     *     CapacityProviders?: list<string>|null,
     *     ClusterSettings?: list<AwsEcsClusterClusterSettingsDetails>|null,
     *     Configuration?: AwsEcsClusterConfigurationDetails|null,
     *     DefaultCapacityProviderStrategy?: list<AwsEcsClusterDefaultCapacityProviderStrategyDetails>|null,
     *     ClusterName?: string|null,
     *     RegisteredContainerInstancesCount?: int|null,
     *     RunningTasksCount?: int|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
