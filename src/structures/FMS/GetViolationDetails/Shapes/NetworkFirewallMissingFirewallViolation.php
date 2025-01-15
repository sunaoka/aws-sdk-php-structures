<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationTarget
 * @property string|null $VPC
 * @property string|null $AvailabilityZone
 * @property string|null $TargetViolationReason
 */
class NetworkFirewallMissingFirewallViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string|null,
     *     VPC?: string|null,
     *     AvailabilityZone?: string|null,
     *     TargetViolationReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
