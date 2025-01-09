<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MinCapacity
 * @property double $MaxCapacity
 */
class ServerlessV2ScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     MinCapacity?: double,
     *     MaxCapacity?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
