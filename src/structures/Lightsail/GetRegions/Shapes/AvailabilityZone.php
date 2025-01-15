<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $zoneName
 * @property string|null $state
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{
     *     zoneName?: string|null,
     *     state?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
