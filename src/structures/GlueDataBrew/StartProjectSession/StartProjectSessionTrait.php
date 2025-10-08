<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\StartProjectSession;

trait StartProjectSessionTrait
{
    /**
     * @param StartProjectSessionRequest $args
     * @return StartProjectSessionResponse
     */
    public function startProjectSession(StartProjectSessionRequest $args)
    {
        $result = parent::startProjectSession($args->toArray());
        return new StartProjectSessionResponse($result->toArray());
    }
}
