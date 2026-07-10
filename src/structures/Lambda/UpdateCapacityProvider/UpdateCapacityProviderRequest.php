<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityProviderName
 * @property Shapes\CapacityProviderScalingConfig|null $CapacityProviderScalingConfig
 * @property Shapes\PropagateTags|null $PropagateTags
 * @property Shapes\CapacityProviderTelemetryConfig|null $TelemetryConfig
 */
class UpdateCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     CapacityProviderName: string,
     *     CapacityProviderScalingConfig?: Shapes\CapacityProviderScalingConfig|null,
     *     PropagateTags?: Shapes\PropagateTags|null,
     *     TelemetryConfig?: Shapes\CapacityProviderTelemetryConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
