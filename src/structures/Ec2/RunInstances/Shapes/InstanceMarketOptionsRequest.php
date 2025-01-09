<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'spot'|'capacity-block' $MarketType
 * @property SpotMarketOptions $SpotOptions
 */
class InstanceMarketOptionsRequest extends Shape
{
    /**
     * @param array{
     *     MarketType?: 'spot'|'capacity-block',
     *     SpotOptions?: SpotMarketOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
