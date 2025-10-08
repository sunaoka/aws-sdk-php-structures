<?php

namespace Sunaoka\Aws\Structures\Inspector2\StopCisSession;

trait StopCisSessionTrait
{
    /**
     * @param StopCisSessionRequest $args
     * @return StopCisSessionResponse
     */
    public function stopCisSession(StopCisSessionRequest $args)
    {
        $result = parent::stopCisSession($args->toArray());
        return new StopCisSessionResponse($result->toArray());
    }
}
