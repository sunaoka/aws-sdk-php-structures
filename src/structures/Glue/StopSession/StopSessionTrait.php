<?php

namespace Sunaoka\Aws\Structures\Glue\StopSession;

trait StopSessionTrait
{
    /**
     * @param StopSessionRequest $args
     * @return StopSessionResponse
     */
    public function stopSession(StopSessionRequest $args)
    {
        $result = parent::stopSession($args->toArray());
        return new StopSessionResponse($result->toArray());
    }
}
