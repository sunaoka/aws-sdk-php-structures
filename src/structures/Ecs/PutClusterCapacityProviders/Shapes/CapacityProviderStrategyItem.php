<?php

namespace Sunaoka\Aws\Structures\Ecs\PutClusterCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $capacityProvider
 * @property int<0, 1000>|null $weight
 * @property int<0, 100000>|null $base
 */
class CapacityProviderStrategyItem extends Shape
{
    /**
     * @param array{
     *     capacityProvider: string,
     *     weight?: int<0, 1000>|null,
     *     base?: int<0, 100000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
