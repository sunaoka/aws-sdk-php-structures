<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxy;

trait GetProxyTrait
{
    /**
     * @param GetProxyRequest $args
     * @return GetProxyResponse
     */
    public function getProxy(GetProxyRequest $args)
    {
        $result = parent::getProxy($args->toArray());
        return new GetProxyResponse($result->toArray());
    }
}
