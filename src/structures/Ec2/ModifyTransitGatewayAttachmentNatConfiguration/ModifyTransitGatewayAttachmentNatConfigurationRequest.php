<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayAttachmentNatConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 * @property 'enable'|'disable'|null $NatGatewaySupport
 * @property 'enable'|'disable'|null $NatSystemRouteSupport
 * @property list<Shapes\TransitGatewayNatRuleRequest>|null $NatGatewayRules
 * @property bool|null $ResetNatGatewayRules
 * @property bool|null $DryRun
 */
class ModifyTransitGatewayAttachmentNatConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId: string,
     *     NatGatewaySupport?: 'enable'|'disable'|null,
     *     NatSystemRouteSupport?: 'enable'|'disable'|null,
     *     NatGatewayRules?: list<Shapes\TransitGatewayNatRuleRequest>|null,
     *     ResetNatGatewayRules?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
