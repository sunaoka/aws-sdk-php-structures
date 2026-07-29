<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPolicyTableEntry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyRuleNumber
 * @property TransitGatewayPolicyRule|null $PolicyRule
 * @property string|null $TargetRouteTableId
 * @property 'active'|'deleted'|null $State
 */
class TransitGatewayPolicyTableEntry extends Shape
{
    /**
     * @param array{
     *     PolicyRuleNumber?: string|null,
     *     PolicyRule?: TransitGatewayPolicyRule|null,
     *     TargetRouteTableId?: string|null,
     *     State?: 'active'|'deleted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
