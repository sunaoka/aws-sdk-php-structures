<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayPolicyTableEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayPolicyTableId
 * @property string $PolicyRuleNumber
 * @property Shapes\TransitGatewayRequestPolicyRule|null $PolicyRule
 * @property string|null $TargetRouteTableId
 * @property bool|null $DryRun
 */
class ModifyTransitGatewayPolicyTableEntryRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayPolicyTableId: string,
     *     PolicyRuleNumber: string,
     *     PolicyRule?: Shapes\TransitGatewayRequestPolicyRule|null,
     *     TargetRouteTableId?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
