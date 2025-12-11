<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelHandshakes;

trait ListChannelHandshakesTrait
{
    /**
     * @param ListChannelHandshakesRequest $args
     * @return ListChannelHandshakesResponse
     */
    public function listChannelHandshakes(ListChannelHandshakesRequest $args)
    {
        $result = parent::listChannelHandshakes($args->toArray());
        return new ListChannelHandshakesResponse($result->toArray());
    }
}
