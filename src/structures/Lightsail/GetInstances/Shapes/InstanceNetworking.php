<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonthlyTransfer|null $monthlyTransfer
 * @property list<InstancePortInfo>|null $ports
 */
class InstanceNetworking extends Shape
{
    /**
     * @param array{
     *     monthlyTransfer?: MonthlyTransfer|null,
     *     ports?: list<InstancePortInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
