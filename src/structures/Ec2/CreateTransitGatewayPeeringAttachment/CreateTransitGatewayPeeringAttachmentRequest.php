<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPeeringAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property string $PeerTransitGatewayId
 * @property string $PeerAccountId
 * @property string $PeerRegion
 * @property Shapes\CreateTransitGatewayPeeringAttachmentRequestOptions $Options
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateTransitGatewayPeeringAttachmentRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     PeerTransitGatewayId: string,
     *     PeerAccountId: string,
     *     PeerRegion: string,
     *     Options?: Shapes\CreateTransitGatewayPeeringAttachmentRequestOptions,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
