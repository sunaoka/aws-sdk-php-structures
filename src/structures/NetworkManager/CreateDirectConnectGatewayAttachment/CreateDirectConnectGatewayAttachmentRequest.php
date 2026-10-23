<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateDirectConnectGatewayAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $DirectConnectGatewayArn
 * @property string|null $RoutingPolicyLabel
 * @property list<string> $EdgeLocations
 * @property 'ENABLE'|'DISABLE'|null $NatGatewaySupport
 * @property bool|null $NatSystemRouteSupport
 * @property list<Shapes\NatRuleRequest>|null $NatGatewayRules
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateDirectConnectGatewayAttachmentRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     DirectConnectGatewayArn: string,
     *     RoutingPolicyLabel?: string|null,
     *     EdgeLocations: list<string>,
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
