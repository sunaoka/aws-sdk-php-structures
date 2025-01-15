<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServicePowers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $powerId
 * @property float|null $price
 * @property float|null $cpuCount
 * @property float|null $ramSizeInGb
 * @property string|null $name
 * @property bool|null $isActive
 */
class ContainerServicePower extends Shape
{
    /**
     * @param array{
     *     powerId?: string|null,
     *     price?: float|null,
     *     cpuCount?: float|null,
     *     ramSizeInGb?: float|null,
     *     name?: string|null,
     *     isActive?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
