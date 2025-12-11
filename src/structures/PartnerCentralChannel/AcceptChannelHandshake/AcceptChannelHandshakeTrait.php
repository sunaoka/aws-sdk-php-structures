<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\AcceptChannelHandshake;

trait AcceptChannelHandshakeTrait
{
    /**
     * @param AcceptChannelHandshakeRequest $args
     * @return AcceptChannelHandshakeResponse
     */
    public function acceptChannelHandshake(AcceptChannelHandshakeRequest $args)
    {
        $result = parent::acceptChannelHandshake($args->toArray());
        return new AcceptChannelHandshakeResponse($result->toArray());
    }
}
