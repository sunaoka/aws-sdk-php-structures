<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $capacityProvider
 * @property int<0, 1000> $weight
 * @property int<0, 100000> $base
 */
class CapacityProviderStrategyItem extends Shape
{
    /**
     * @param array{
     *     capacityProvider: string,
     *     weight?: int<0, 1000>,
     *     base?: int<0, 100000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
