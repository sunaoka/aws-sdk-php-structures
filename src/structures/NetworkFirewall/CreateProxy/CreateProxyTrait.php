<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateProxy;

trait CreateProxyTrait
{
    /**
     * @param CreateProxyRequest $args
     * @return CreateProxyResponse
     */
    public function createProxy(CreateProxyRequest $args)
    {
        $result = parent::createProxy($args->toArray());
        return new CreateProxyResponse($result->toArray());
    }
}
