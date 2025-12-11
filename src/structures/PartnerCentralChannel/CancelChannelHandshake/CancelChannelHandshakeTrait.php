<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CancelChannelHandshake;

trait CancelChannelHandshakeTrait
{
    /**
     * @param CancelChannelHandshakeRequest $args
     * @return CancelChannelHandshakeResponse
     */
    public function cancelChannelHandshake(CancelChannelHandshakeRequest $args)
    {
        $result = parent::cancelChannelHandshake($args->toArray());
        return new CancelChannelHandshakeResponse($result->toArray());
    }
}
