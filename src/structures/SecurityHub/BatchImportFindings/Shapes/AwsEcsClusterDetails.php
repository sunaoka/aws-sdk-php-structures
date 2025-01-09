<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterArn
 * @property int $ActiveServicesCount
 * @property list<string> $CapacityProviders
 * @property list<AwsEcsClusterClusterSettingsDetails> $ClusterSettings
 * @property AwsEcsClusterConfigurationDetails $Configuration
 * @property list<AwsEcsClusterDefaultCapacityProviderStrategyDetails> $DefaultCapacityProviderStrategy
 * @property string $ClusterName
 * @property int $RegisteredContainerInstancesCount
 * @property int $RunningTasksCount
 * @property string $Status
 */
class AwsEcsClusterDetails extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string,
     *     ActiveServicesCount?: int,
     *     CapacityProviders?: list<string>,
     *     ClusterSettings?: list<AwsEcsClusterClusterSettingsDetails>,
     *     Configuration?: AwsEcsClusterConfigurationDetails,
     *     DefaultCapacityProviderStrategy?: list<AwsEcsClusterDefaultCapacityProviderStrategyDetails>,
     *     ClusterName?: string,
     *     RegisteredContainerInstancesCount?: int,
     *     RunningTasksCount?: int,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
