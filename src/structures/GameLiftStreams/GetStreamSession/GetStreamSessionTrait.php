<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetStreamSession;

trait GetStreamSessionTrait
{
    /**
     * @param GetStreamSessionRequest $args
     * @return GetStreamSessionResponse
     */
    public function getStreamSession(GetStreamSessionRequest $args)
    {
        $result = parent::getStreamSession($args->toArray());
        return new GetStreamSessionResponse($result->toArray());
    }
}
