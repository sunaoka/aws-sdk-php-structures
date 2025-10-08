<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterTransitGatewayMulticastGroupMembers;

trait DeregisterTransitGatewayMulticastGroupMembersTrait
{
    /**
     * @param DeregisterTransitGatewayMulticastGroupMembersRequest $args
     * @return DeregisterTransitGatewayMulticastGroupMembersResponse
     */
    public function deregisterTransitGatewayMulticastGroupMembers(DeregisterTransitGatewayMulticastGroupMembersRequest $args)
    {
        $result = parent::deregisterTransitGatewayMulticastGroupMembers($args->toArray());
        return new DeregisterTransitGatewayMulticastGroupMembersResponse($result->toArray());
    }
}
