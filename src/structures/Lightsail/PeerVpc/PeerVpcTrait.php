<?php

namespace Sunaoka\Aws\Structures\Lightsail\PeerVpc;

trait PeerVpcTrait
{
    /**
     * @param PeerVpcRequest $args
     * @return PeerVpcResponse
     */
    public function peerVpc(PeerVpcRequest $args)
    {
        $result = parent::peerVpc($args->toArray());
        return new PeerVpcResponse($result->toArray());
    }
}
