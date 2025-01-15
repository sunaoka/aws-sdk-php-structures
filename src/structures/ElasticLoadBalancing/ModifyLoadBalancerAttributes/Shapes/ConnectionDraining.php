<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\ModifyLoadBalancerAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int|null $Timeout
 */
class ConnectionDraining extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     Timeout?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
