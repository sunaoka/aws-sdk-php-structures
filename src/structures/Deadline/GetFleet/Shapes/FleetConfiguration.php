<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerManagedFleetConfiguration|null $customerManaged
 * @property ServiceManagedEc2FleetConfiguration|null $serviceManagedEc2
 */
class FleetConfiguration extends Shape
{
    /**
     * @param array{
     *     customerManaged?: CustomerManagedFleetConfiguration|null,
     *     serviceManagedEc2?: ServiceManagedEc2FleetConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
