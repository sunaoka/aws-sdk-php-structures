<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'spot'|null $MarketType
 * @property LaunchTemplateSpotMarketOptionsRequest|null $SpotOptions
 */
class LaunchTemplateInstanceMarketOptionsRequest extends Shape
{
    /**
     * @param array{
     *     MarketType?: 'spot'|null,
     *     SpotOptions?: LaunchTemplateSpotMarketOptionsRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
