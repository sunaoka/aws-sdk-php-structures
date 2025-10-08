<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateProxySession;

trait CreateProxySessionTrait
{
    /**
     * @param CreateProxySessionRequest $args
     * @return CreateProxySessionResponse
     */
    public function createProxySession(CreateProxySessionRequest $args)
    {
        $result = parent::createProxySession($args->toArray());
        return new CreateProxySessionResponse($result->toArray());
    }
}
