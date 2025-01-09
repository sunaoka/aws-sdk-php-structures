<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property string $VPC
 * @property string $AvailabilityZone
 * @property string $CurrentRouteTable
 * @property string $ExpectedRouteTable
 */
class NetworkFirewallMissingExpectedRTViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     VPC?: string,
     *     AvailabilityZone?: string,
     *     CurrentRouteTable?: string,
     *     ExpectedRouteTable?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
