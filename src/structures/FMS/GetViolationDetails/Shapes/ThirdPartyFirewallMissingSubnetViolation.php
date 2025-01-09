<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property string $VPC
 * @property string $AvailabilityZone
 * @property string $TargetViolationReason
 */
class ThirdPartyFirewallMissingSubnetViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     VPC?: string,
     *     AvailabilityZone?: string,
     *     TargetViolationReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
