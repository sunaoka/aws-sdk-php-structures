<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayRouteTableAnnouncements;

trait DescribeTransitGatewayRouteTableAnnouncementsTrait
{
    /**
     * @param DescribeTransitGatewayRouteTableAnnouncementsRequest $args
     * @return DescribeTransitGatewayRouteTableAnnouncementsResponse
     */
    public function describeTransitGatewayRouteTableAnnouncements(DescribeTransitGatewayRouteTableAnnouncementsRequest $args)
    {
        $result = parent::describeTransitGatewayRouteTableAnnouncements($args->toArray());
        return new DescribeTransitGatewayRouteTableAnnouncementsResponse($result->toArray());
    }
}
