<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BALANCED'|'LOW_LATENCY' $RecoveryLatencyMode
 */
class FabricConfiguration extends Shape
{
    /**
     * @param array{RecoveryLatencyMode: 'BALANCED'|'LOW_LATENCY'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
