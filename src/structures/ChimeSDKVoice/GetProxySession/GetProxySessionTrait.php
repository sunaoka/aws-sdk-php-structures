<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetProxySession;

trait GetProxySessionTrait
{
    /**
     * @param GetProxySessionRequest $args
     * @return GetProxySessionResponse
     */
    public function getProxySession(GetProxySessionRequest $args)
    {
        $result = parent::getProxySession($args->toArray());
        return new GetProxySessionResponse($result->toArray());
    }
}
