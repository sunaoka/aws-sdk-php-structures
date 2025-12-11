<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\RejectChannelHandshake;

trait RejectChannelHandshakeTrait
{
    /**
     * @param RejectChannelHandshakeRequest $args
     * @return RejectChannelHandshakeResponse
     */
    public function rejectChannelHandshake(RejectChannelHandshakeRequest $args)
    {
        $result = parent::rejectChannelHandshake($args->toArray());
        return new RejectChannelHandshakeResponse($result->toArray());
    }
}
