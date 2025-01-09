<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $capacityProvider
 * @property int $weight
 * @property int $base
 */
class CapacityProviderStrategyItem extends Shape
{
    /**
     * @param array{
     *     capacityProvider: string,
     *     weight?: int,
     *     base?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
