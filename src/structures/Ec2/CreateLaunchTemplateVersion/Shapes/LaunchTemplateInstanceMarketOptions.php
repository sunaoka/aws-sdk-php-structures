<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'spot'|'capacity-block' $MarketType
 * @property LaunchTemplateSpotMarketOptions $SpotOptions
 */
class LaunchTemplateInstanceMarketOptions extends Shape
{
    /**
     * @param array{
     *     MarketType?: 'spot'|'capacity-block',
     *     SpotOptions?: LaunchTemplateSpotMarketOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
