<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100000> $base
 * @property string $capacityProvider
 * @property int<0, 1000> $weight
 */
class CapacityProviderStrategyItem extends Shape
{
    /**
     * @param array{
     *     base?: int<0, 100000>,
     *     capacityProvider: string,
     *     weight?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
