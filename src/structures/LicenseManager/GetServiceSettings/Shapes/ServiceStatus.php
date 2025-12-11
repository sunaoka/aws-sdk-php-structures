<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetServiceSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CrossAccountDiscoveryServiceStatus|null $CrossAccountDiscovery
 * @property CrossRegionDiscoveryStatus|null $CrossRegionDiscovery
 */
class ServiceStatus extends Shape
{
    /**
     * @param array{
     *     CrossAccountDiscovery?: CrossAccountDiscoveryServiceStatus|null,
     *     CrossRegionDiscovery?: CrossRegionDiscoveryStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
