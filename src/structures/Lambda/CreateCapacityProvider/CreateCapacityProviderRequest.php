<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityProviderName
 * @property Shapes\CapacityProviderVpcConfig $VpcConfig
 * @property Shapes\CapacityProviderPermissionsConfig $PermissionsConfig
 * @property Shapes\InstanceRequirements|null $InstanceRequirements
 * @property Shapes\CapacityProviderScalingConfig|null $CapacityProviderScalingConfig
 * @property string|null $KmsKeyArn
 * @property array<string, string>|null $Tags
 */
class CreateCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     CapacityProviderName: string,
     *     VpcConfig: Shapes\CapacityProviderVpcConfig,
     *     PermissionsConfig: Shapes\CapacityProviderPermissionsConfig,
     *     InstanceRequirements?: Shapes\InstanceRequirements|null,
     *     CapacityProviderScalingConfig?: Shapes\CapacityProviderScalingConfig|null,
     *     KmsKeyArn?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
