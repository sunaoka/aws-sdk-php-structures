<?php

namespace Sunaoka\Aws\Structures\Neptune\RestoreDBClusterFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MinCapacity
 * @property double $MaxCapacity
 */
class ServerlessV2ScalingConfigurationInfo extends Shape
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
