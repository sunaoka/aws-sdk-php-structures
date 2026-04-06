<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityProviderName
 * @property Shapes\CapacityProviderScalingConfig|null $CapacityProviderScalingConfig
 */
class UpdateCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     CapacityProviderName: string,
     *     CapacityProviderScalingConfig?: Shapes\CapacityProviderScalingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
