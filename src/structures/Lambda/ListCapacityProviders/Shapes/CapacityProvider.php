<?php

namespace Sunaoka\Aws\Structures\Lambda\ListCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityProviderArn
 * @property 'Pending'|'Active'|'Failed'|'Deleting' $State
 * @property CapacityProviderVpcConfig $VpcConfig
 * @property CapacityProviderPermissionsConfig $PermissionsConfig
 * @property InstanceRequirements|null $InstanceRequirements
 * @property CapacityProviderScalingConfig|null $CapacityProviderScalingConfig
 * @property string|null $KmsKeyArn
 * @property string|null $LastModified
 */
class CapacityProvider extends Shape
{
    /**
     * @param array{
     *     CapacityProviderArn: string,
     *     State: 'Pending'|'Active'|'Failed'|'Deleting',
     *     VpcConfig: CapacityProviderVpcConfig,
     *     PermissionsConfig: CapacityProviderPermissionsConfig,
     *     InstanceRequirements?: InstanceRequirements|null,
     *     CapacityProviderScalingConfig?: CapacityProviderScalingConfig|null,
     *     KmsKeyArn?: string|null,
     *     LastModified?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
