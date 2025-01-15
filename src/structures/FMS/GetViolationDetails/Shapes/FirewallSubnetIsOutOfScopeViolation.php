<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirewallSubnetId
 * @property string|null $VpcId
 * @property string|null $SubnetAvailabilityZone
 * @property string|null $SubnetAvailabilityZoneId
 * @property string|null $VpcEndpointId
 */
class FirewallSubnetIsOutOfScopeViolation extends Shape
{
    /**
     * @param array{
     *     FirewallSubnetId?: string|null,
     *     VpcId?: string|null,
     *     SubnetAvailabilityZone?: string|null,
     *     SubnetAvailabilityZoneId?: string|null,
     *     VpcEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
