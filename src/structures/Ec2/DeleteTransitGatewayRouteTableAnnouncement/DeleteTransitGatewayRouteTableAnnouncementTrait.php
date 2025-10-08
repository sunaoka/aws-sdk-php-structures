<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayRouteTableAnnouncement;

trait DeleteTransitGatewayRouteTableAnnouncementTrait
{
    /**
     * @param DeleteTransitGatewayRouteTableAnnouncementRequest $args
     * @return DeleteTransitGatewayRouteTableAnnouncementResponse
     */
    public function deleteTransitGatewayRouteTableAnnouncement(
        DeleteTransitGatewayRouteTableAnnouncementRequest $args,
    ) {
        $result = parent::deleteTransitGatewayRouteTableAnnouncement($args->toArray());
        return new DeleteTransitGatewayRouteTableAnnouncementResponse($result->toArray());
    }
}
