<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayRouteTableAnnouncement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableAnnouncementId
 * @property bool $DryRun
 */
class DeleteTransitGatewayRouteTableAnnouncementRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableAnnouncementId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
