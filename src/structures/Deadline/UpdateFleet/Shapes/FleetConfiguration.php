<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerManagedFleetConfiguration $customerManaged
 * @property ServiceManagedEc2FleetConfiguration $serviceManagedEc2
 */
class FleetConfiguration extends Shape
{
    /**
     * @param array{
     *     customerManaged?: CustomerManagedFleetConfiguration,
     *     serviceManagedEc2?: ServiceManagedEc2FleetConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
