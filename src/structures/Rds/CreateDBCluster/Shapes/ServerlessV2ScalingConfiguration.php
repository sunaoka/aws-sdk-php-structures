<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $MinCapacity
 * @property double $MaxCapacity
 * @property int $SecondsUntilAutoPause
 */
class ServerlessV2ScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     MinCapacity?: double,
     *     MaxCapacity?: double,
     *     SecondsUntilAutoPause?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
