<?php

namespace Sunaoka\Aws\Structures\Rds\RebootDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $MinCapacity
 * @property double|null $MaxCapacity
 * @property int|null $SecondsUntilAutoPause
 */
class ServerlessV2ScalingConfigurationInfo extends Shape
{
    /**
     * @param array{
     *     MinCapacity?: double|null,
     *     MaxCapacity?: double|null,
     *     SecondsUntilAutoPause?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
