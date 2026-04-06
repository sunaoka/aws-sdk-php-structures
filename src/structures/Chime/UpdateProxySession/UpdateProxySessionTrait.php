<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateProxySession;

trait UpdateProxySessionTrait
{
    /**
     * @param UpdateProxySessionRequest $args
     * @return UpdateProxySessionResponse
     */
    public function updateProxySession(UpdateProxySessionRequest $args)
    {
        $result = parent::updateProxySession($args->toArray());
        return new UpdateProxySessionResponse($result->toArray());
    }
}
