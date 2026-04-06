<?php

namespace Sunaoka\Aws\Structures\Inspector2\StartCisSession;

trait StartCisSessionTrait
{
    /**
     * @param StartCisSessionRequest $args
     * @return StartCisSessionResponse
     */
    public function startCisSession(StartCisSessionRequest $args)
    {
        $result = parent::startCisSession($args->toArray());
        return new StartCisSessionResponse($result->toArray());
    }
}
