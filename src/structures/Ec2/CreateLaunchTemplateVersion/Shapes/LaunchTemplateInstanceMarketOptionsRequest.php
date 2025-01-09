<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'spot'|'capacity-block' $MarketType
 * @property LaunchTemplateSpotMarketOptionsRequest $SpotOptions
 */
class LaunchTemplateInstanceMarketOptionsRequest extends Shape
{
    /**
     * @param array{
     *     MarketType?: 'spot'|'capacity-block',
     *     SpotOptions?: LaunchTemplateSpotMarketOptionsRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
