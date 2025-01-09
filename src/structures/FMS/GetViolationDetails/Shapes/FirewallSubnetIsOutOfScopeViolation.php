<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirewallSubnetId
 * @property string $VpcId
 * @property string $SubnetAvailabilityZone
 * @property string $SubnetAvailabilityZoneId
 * @property string $VpcEndpointId
 */
class FirewallSubnetIsOutOfScopeViolation extends Shape
{
    /**
     * @param array{
     *     FirewallSubnetId?: string,
     *     VpcId?: string,
     *     SubnetAvailabilityZone?: string,
     *     SubnetAvailabilityZoneId?: string,
     *     VpcEndpointId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
