<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetServiceSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, RegionStatus>|null $Message
 */
class CrossRegionDiscoveryStatus extends Shape
{
    /**
     * @param array{Message?: array<string, RegionStatus>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
