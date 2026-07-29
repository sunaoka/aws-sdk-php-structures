<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPolicyTableEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayPolicyTableId
 * @property string $PolicyRuleNumber
 * @property Shapes\TransitGatewayRequestPolicyRule|null $PolicyRule
 * @property string $TargetRouteTableId
 * @property bool|null $DryRun
 */
class CreateTransitGatewayPolicyTableEntryRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayPolicyTableId: string,
     *     PolicyRuleNumber: string,
     *     PolicyRule?: Shapes\TransitGatewayRequestPolicyRule|null,
     *     TargetRouteTableId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
