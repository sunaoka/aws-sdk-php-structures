<?php

namespace Sunaoka\Aws\Structures\S3\CreateSession;

trait CreateSessionTrait
{
    /**
     * @param CreateSessionRequest $args
     * @return CreateSessionResponse
     */
    public function createSession(CreateSessionRequest $args)
    {
        $result = parent::createSession($args->toArray());
        return new CreateSessionResponse($result->toArray());
    }
}
