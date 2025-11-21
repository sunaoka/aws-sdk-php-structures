<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'spot'|'capacity-block'|'interruptible-capacity-reservation'|null $MarketType
 * @property LaunchTemplateSpotMarketOptions|null $SpotOptions
 */
class LaunchTemplateInstanceMarketOptions extends Shape
{
    /**
     * @param array{
     *     MarketType?: 'spot'|'capacity-block'|'interruptible-capacity-reservation'|null,
     *     SpotOptions?: LaunchTemplateSpotMarketOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
