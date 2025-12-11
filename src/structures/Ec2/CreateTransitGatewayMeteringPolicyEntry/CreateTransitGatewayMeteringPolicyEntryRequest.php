<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMeteringPolicyEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayMeteringPolicyId
 * @property int $PolicyRuleNumber
 * @property string|null $SourceTransitGatewayAttachmentId
 * @property 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null $SourceTransitGatewayAttachmentType
 * @property string|null $SourceCidrBlock
 * @property string|null $SourcePortRange
 * @property string|null $DestinationTransitGatewayAttachmentId
 * @property 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null $DestinationTransitGatewayAttachmentType
 * @property string|null $DestinationCidrBlock
 * @property string|null $DestinationPortRange
 * @property string|null $Protocol
 * @property 'source-attachment-owner'|'destination-attachment-owner'|'transit-gateway-owner' $MeteredAccount
 * @property bool|null $DryRun
 */
class CreateTransitGatewayMeteringPolicyEntryRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayMeteringPolicyId: string,
     *     PolicyRuleNumber: int,
     *     SourceTransitGatewayAttachmentId?: string|null,
     *     SourceTransitGatewayAttachmentType?: 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null,
     *     SourceCidrBlock?: string|null,
     *     SourcePortRange?: string|null,
     *     DestinationTransitGatewayAttachmentId?: string|null,
     *     DestinationTransitGatewayAttachmentType?: 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null,
     *     DestinationCidrBlock?: string|null,
     *     DestinationPortRange?: string|null,
     *     Protocol?: string|null,
     *     MeteredAccount: 'source-attachment-owner'|'destination-attachment-owner'|'transit-gateway-owner',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
