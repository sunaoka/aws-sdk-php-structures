<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonthlyTransfer $monthlyTransfer
 * @property list<InstancePortInfo> $ports
 */
class InstanceNetworking extends Shape
{
    /**
     * @param array{
     *     monthlyTransfer?: MonthlyTransfer,
     *     ports?: list<InstancePortInfo>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
