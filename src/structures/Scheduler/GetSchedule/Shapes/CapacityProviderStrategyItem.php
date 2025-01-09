<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $base
 * @property string $capacityProvider
 * @property int $weight
 */
class CapacityProviderStrategyItem extends Shape
{
    /**
     * @param array{
     *     base?: int,
     *     capacityProvider: string,
     *     weight?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
