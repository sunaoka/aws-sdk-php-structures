<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSession;

trait GetSessionTrait
{
    /**
     * @param GetSessionRequest $args
     * @return GetSessionResponse
     */
    public function getSession(GetSessionRequest $args)
    {
        $result = parent::getSession($args->toArray());
        return new GetSessionResponse($result->toArray());
    }
}
