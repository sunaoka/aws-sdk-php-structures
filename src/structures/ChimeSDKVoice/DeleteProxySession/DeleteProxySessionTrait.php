<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteProxySession;

trait DeleteProxySessionTrait
{
    /**
     * @param DeleteProxySessionRequest $args
     * @return void
     */
    public function deleteProxySession(DeleteProxySessionRequest $args)
    {
        parent::deleteProxySession($args->toArray());
    }
}
