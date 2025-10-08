<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayConnectPeer;

trait DeleteTransitGatewayConnectPeerTrait
{
    /**
     * @param DeleteTransitGatewayConnectPeerRequest $args
     * @return DeleteTransitGatewayConnectPeerResponse
     */
    public function deleteTransitGatewayConnectPeer(DeleteTransitGatewayConnectPeerRequest $args)
    {
        $result = parent::deleteTransitGatewayConnectPeer($args->toArray());
        return new DeleteTransitGatewayConnectPeerResponse($result->toArray());
    }
}
