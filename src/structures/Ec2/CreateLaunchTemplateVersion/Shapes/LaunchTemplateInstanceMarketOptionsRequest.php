<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'spot'|'capacity-block'|null $MarketType
 * @property LaunchTemplateSpotMarketOptionsRequest|null $SpotOptions
 */
class LaunchTemplateInstanceMarketOptionsRequest extends Shape
{
    /**
     * @param array{
     *     MarketType?: 'spot'|'capacity-block'|null,
     *     SpotOptions?: LaunchTemplateSpotMarketOptionsRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
