<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationTarget
 * @property string|null $VPC
 * @property string|null $AvailabilityZone
 * @property string|null $CurrentRouteTable
 * @property string|null $ExpectedRouteTable
 */
class ThirdPartyFirewallMissingExpectedRouteTableViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string|null,
     *     VPC?: string|null,
     *     AvailabilityZone?: string|null,
     *     CurrentRouteTable?: string|null,
     *     ExpectedRouteTable?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
