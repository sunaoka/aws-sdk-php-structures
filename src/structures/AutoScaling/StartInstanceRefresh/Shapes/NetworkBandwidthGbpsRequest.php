<?php

namespace Sunaoka\Aws\Structures\AutoScaling\StartInstanceRefresh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Min
 * @property double|null $Max
 */
class NetworkBandwidthGbpsRequest extends Shape
{
    /**
     * @param array{
     *     Min?: double|null,
     *     Max?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
