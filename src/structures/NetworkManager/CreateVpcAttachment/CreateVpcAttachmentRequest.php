<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateVpcAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property string $VpcArn
 * @property list<string> $SubnetArns
 * @property Shapes\VpcOptions|null $Options
 * @property string|null $RoutingPolicyLabel
 * @property 'ENABLE'|'DISABLE'|null $NatGatewaySupport
 * @property list<Shapes\NatRuleRequest>|null $NatGatewayRules
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateVpcAttachmentRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     VpcArn: string,
     *     SubnetArns: list<string>,
     *     Options?: Shapes\VpcOptions|null,
     *     RoutingPolicyLabel?: string|null,
     *     NatGatewaySupport?: 'ENABLE'|'DISABLE'|null,
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
