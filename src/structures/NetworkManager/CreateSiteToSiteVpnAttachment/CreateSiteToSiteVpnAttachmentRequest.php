<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateSiteToSiteVpnAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $VpnConnectionArn
 * @property string|null $RoutingPolicyLabel
 * @property 'ENABLE'|'DISABLE'|null $NatGatewaySupport
 * @property bool|null $NatSystemRouteSupport
 * @property list<Shapes\NatRuleRequest>|null $NatGatewayRules
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateSiteToSiteVpnAttachmentRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     VpnConnectionArn: string,
     *     RoutingPolicyLabel?: string|null,
     *     NatGatewaySupport?: 'ENABLE'|'DISABLE'|null,
     *     NatSystemRouteSupport?: bool|null,
     *     NatGatewayRules?: list<Shapes\NatRuleRequest>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
