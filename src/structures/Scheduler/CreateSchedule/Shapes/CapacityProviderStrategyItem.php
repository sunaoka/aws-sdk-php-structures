<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100000>|null $base
 * @property string $capacityProvider
 * @property int<0, 1000>|null $weight
 */
class CapacityProviderStrategyItem extends Shape
{
    /**
     * @param array{
     *     base?: int<0, 100000>|null,
     *     capacityProvider: string,
     *     weight?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
