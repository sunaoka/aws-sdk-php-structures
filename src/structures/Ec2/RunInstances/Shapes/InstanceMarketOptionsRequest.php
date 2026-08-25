<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'spot'|'capacity-block'|'interruptible-capacity-reservation'|'on-demand'|null $MarketType
 * @property SpotMarketOptions|null $SpotOptions
 */
class InstanceMarketOptionsRequest extends Shape
{
    /**
     * @param array{
     *     MarketType?: 'spot'|'capacity-block'|'interruptible-capacity-reservation'|'on-demand'|null,
     *     SpotOptions?: SpotMarketOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
