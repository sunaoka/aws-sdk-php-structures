<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\ListTunnels;

trait ListTunnelsTrait
{
    /**
     * @param ListTunnelsRequest $args
     * @return ListTunnelsResponse
     */
    public function listTunnels(ListTunnelsRequest $args)
    {
        $result = parent::listTunnels($args->toArray());
        return new ListTunnelsResponse($result->toArray());
    }
}
