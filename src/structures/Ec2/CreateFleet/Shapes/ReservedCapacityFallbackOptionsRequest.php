<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'on-demand'>|null $MarketTypes
 */
class ReservedCapacityFallbackOptionsRequest extends Shape
{
    /**
     * @param array{MarketTypes?: list<'on-demand'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
