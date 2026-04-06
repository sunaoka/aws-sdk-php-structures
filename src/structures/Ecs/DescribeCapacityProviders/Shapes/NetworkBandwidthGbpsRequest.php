<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $min
 * @property double|null $max
 */
class NetworkBandwidthGbpsRequest extends Shape
{
    /**
     * @param array{
     *     min?: double|null,
     *     max?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
