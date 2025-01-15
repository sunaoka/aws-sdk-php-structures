<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayRouteTableAnnouncement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string $PeeringAttachmentId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateTransitGatewayRouteTableAnnouncementRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     PeeringAttachmentId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
