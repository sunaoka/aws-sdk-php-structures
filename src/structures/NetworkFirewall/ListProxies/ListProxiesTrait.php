<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListProxies;

trait ListProxiesTrait
{
    /**
     * @param ListProxiesRequest $args
     * @return ListProxiesResponse
     */
    public function listProxies(ListProxiesRequest $args)
    {
        $result = parent::listProxies($args->toArray());
        return new ListProxiesResponse($result->toArray());
    }
}
