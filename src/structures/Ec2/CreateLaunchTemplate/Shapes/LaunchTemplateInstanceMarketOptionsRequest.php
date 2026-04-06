<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'spot'|'capacity-block'|'interruptible-capacity-reservation'|null $MarketType
 * @property LaunchTemplateSpotMarketOptionsRequest|null $SpotOptions
 */
class LaunchTemplateInstanceMarketOptionsRequest extends Shape
{
    /**
     * @param array{
     *     MarketType?: 'spot'|'capacity-block'|'interruptible-capacity-reservation'|null,
     *     SpotOptions?: LaunchTemplateSpotMarketOptionsRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
