<?php

namespace Sunaoka\Aws\Structures\ELBProxy\CreateProxy;

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
