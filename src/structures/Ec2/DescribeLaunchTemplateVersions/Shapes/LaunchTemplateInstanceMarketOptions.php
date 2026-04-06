<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'spot'|'capacity-block'|null $MarketType
 * @property LaunchTemplateSpotMarketOptions|null $SpotOptions
 */
class LaunchTemplateInstanceMarketOptions extends Shape
{
    /**
     * @param array{
     *     MarketType?: 'spot'|'capacity-block'|null,
     *     SpotOptions?: LaunchTemplateSpotMarketOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
