<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $zoneName
 * @property string $state
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{
     *     zoneName?: string,
     *     state?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
