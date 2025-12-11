<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelHandshake;

trait CreateChannelHandshakeTrait
{
    /**
     * @param CreateChannelHandshakeRequest $args
     * @return CreateChannelHandshakeResponse
     */
    public function createChannelHandshake(CreateChannelHandshakeRequest $args)
    {
        $result = parent::createChannelHandshake($args->toArray());
        return new CreateChannelHandshakeResponse($result->toArray());
    }
}
