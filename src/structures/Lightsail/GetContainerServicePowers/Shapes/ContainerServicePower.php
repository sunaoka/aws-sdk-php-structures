<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServicePowers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $powerId
 * @property float $price
 * @property float $cpuCount
 * @property float $ramSizeInGb
 * @property string $name
 * @property bool $isActive
 */
class ContainerServicePower extends Shape
{
    /**
     * @param array{
     *     powerId?: string,
     *     price?: float,
     *     cpuCount?: float,
     *     ramSizeInGb?: float,
     *     name?: string,
     *     isActive?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
