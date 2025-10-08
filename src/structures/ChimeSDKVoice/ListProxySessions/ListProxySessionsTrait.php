<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListProxySessions;

trait ListProxySessionsTrait
{
    /**
     * @param ListProxySessionsRequest $args
     * @return ListProxySessionsResponse
     */
    public function listProxySessions(ListProxySessionsRequest $args)
    {
        $result = parent::listProxySessions($args->toArray());
        return new ListProxySessionsResponse($result->toArray());
    }
}
