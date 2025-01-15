<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPeeringAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property string $PeerTransitGatewayId
 * @property string $PeerAccountId
 * @property string $PeerRegion
 * @property Shapes\CreateTransitGatewayPeeringAttachmentRequestOptions|null $Options
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateTransitGatewayPeeringAttachmentRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     PeerTransitGatewayId: string,
     *     PeerAccountId: string,
     *     PeerRegion: string,
     *     Options?: Shapes\CreateTransitGatewayPeeringAttachmentRequestOptions|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
