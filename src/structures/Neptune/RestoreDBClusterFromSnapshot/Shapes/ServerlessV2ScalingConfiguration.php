<?php

namespace Sunaoka\Aws\Structures\Neptune\RestoreDBClusterFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $MinCapacity
 * @property double|null $MaxCapacity
 */
class ServerlessV2ScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     MinCapacity?: double|null,
     *     MaxCapacity?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
