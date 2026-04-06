<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceManagedEc2InstanceCapabilities $instanceCapabilities
 * @property ServiceManagedEc2InstanceMarketOptions $instanceMarketOptions
 */
class ServiceManagedEc2FleetConfiguration extends Shape
{
    /**
     * @param array{
     *     instanceCapabilities: ServiceManagedEc2InstanceCapabilities,
     *     instanceMarketOptions: ServiceManagedEc2InstanceMarketOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
