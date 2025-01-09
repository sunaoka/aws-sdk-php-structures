<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayPolicyTableEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyRuleNumber
 * @property TransitGatewayPolicyRule $PolicyRule
 * @property string $TargetRouteTableId
 */
class TransitGatewayPolicyTableEntry extends Shape
{
    /**
     * @param array{
     *     PolicyRuleNumber?: string,
     *     PolicyRule?: TransitGatewayPolicyRule,
     *     TargetRouteTableId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
