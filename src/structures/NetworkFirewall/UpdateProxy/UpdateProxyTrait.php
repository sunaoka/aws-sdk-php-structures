<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxy;

trait UpdateProxyTrait
{
    /**
     * @param UpdateProxyRequest $args
     * @return UpdateProxyResponse
     */
    public function updateProxy(UpdateProxyRequest $args)
    {
        $result = parent::updateProxy($args->toArray());
        return new UpdateProxyResponse($result->toArray());
    }
}
