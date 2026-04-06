<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSession;

trait GetQAppSessionTrait
{
    /**
     * @param GetQAppSessionRequest $args
     * @return GetQAppSessionResponse
     */
    public function getQAppSession(GetQAppSessionRequest $args)
    {
        $result = parent::getQAppSession($args->toArray());
        return new GetQAppSessionResponse($result->toArray());
    }
}
