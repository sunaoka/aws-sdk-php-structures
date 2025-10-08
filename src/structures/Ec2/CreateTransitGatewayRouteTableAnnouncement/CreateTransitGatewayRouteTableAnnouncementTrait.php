<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayRouteTableAnnouncement;

trait CreateTransitGatewayRouteTableAnnouncementTrait
{
    /**
     * @param CreateTransitGatewayRouteTableAnnouncementRequest $args
     * @return CreateTransitGatewayRouteTableAnnouncementResponse
     */
    public function createTransitGatewayRouteTableAnnouncement(CreateTransitGatewayRouteTableAnnouncementRequest $args)
    {
        $result = parent::createTransitGatewayRouteTableAnnouncement($args->toArray());
        return new CreateTransitGatewayRouteTableAnnouncementResponse($result->toArray());
    }
}
