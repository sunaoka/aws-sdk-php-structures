<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GatewayId
 */
class PropagatingVgwSetDetails extends Shape
{
    /**
     * @param array{GatewayId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
