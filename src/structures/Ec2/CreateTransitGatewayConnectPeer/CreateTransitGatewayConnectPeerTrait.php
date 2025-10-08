<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayConnectPeer;

trait CreateTransitGatewayConnectPeerTrait
{
    /**
     * @param CreateTransitGatewayConnectPeerRequest $args
     * @return CreateTransitGatewayConnectPeerResponse
     */
    public function createTransitGatewayConnectPeer(CreateTransitGatewayConnectPeerRequest $args)
    {
        $result = parent::createTransitGatewayConnectPeer($args->toArray());
        return new CreateTransitGatewayConnectPeerResponse($result->toArray());
    }
}
