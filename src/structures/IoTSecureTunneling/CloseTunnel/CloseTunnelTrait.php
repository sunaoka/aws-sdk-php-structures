<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\CloseTunnel;

trait CloseTunnelTrait
{
    /**
     * @param CloseTunnelRequest $args
     * @return CloseTunnelResponse
     */
    public function closeTunnel(CloseTunnelRequest $args)
    {
        $result = parent::closeTunnel($args->toArray());
        return new CloseTunnelResponse($result->toArray());
    }
}
