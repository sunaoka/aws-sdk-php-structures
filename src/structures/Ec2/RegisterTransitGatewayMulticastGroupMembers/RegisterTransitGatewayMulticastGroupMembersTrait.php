<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterTransitGatewayMulticastGroupMembers;

trait RegisterTransitGatewayMulticastGroupMembersTrait
{
    /**
     * @param RegisterTransitGatewayMulticastGroupMembersRequest $args
     * @return RegisterTransitGatewayMulticastGroupMembersResponse
     */
    public function registerTransitGatewayMulticastGroupMembers(
        RegisterTransitGatewayMulticastGroupMembersRequest $args,
    ) {
        $result = parent::registerTransitGatewayMulticastGroupMembers($args->toArray());
        return new RegisterTransitGatewayMulticastGroupMembersResponse($result->toArray());
    }
}
