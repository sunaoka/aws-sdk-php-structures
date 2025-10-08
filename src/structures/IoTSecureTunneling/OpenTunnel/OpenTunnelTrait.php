<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\OpenTunnel;

trait OpenTunnelTrait
{
    /**
     * @param OpenTunnelRequest $args
     * @return OpenTunnelResponse
     */
    public function openTunnel(OpenTunnelRequest $args)
    {
        $result = parent::openTunnel($args->toArray());
        return new OpenTunnelResponse($result->toArray());
    }
}
